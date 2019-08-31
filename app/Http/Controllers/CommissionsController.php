<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Repositories\CustomerRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CommissionsController extends Controller
{
    protected $repo;

    public function __construct(CustomerRepository $repo)
    {
        $this->repo = $repo;
    }

    public function __invoke()
    {

        // get all data
        // create terminals array
        $c = 0;

        $agents = [22];


        foreach ($agents as $agent){

            $terminals = [];
            $transactions = [];


            $response = $this->repo->getAgentTransactions($agent, "01/05/2019 - 02/07/2019");

            if ($response->code === "00") {
                $transactions = $response->transactions;
            }

            foreach ($transactions as $transaction) {

                $transaction->date = Carbon::createFromFormat('H:i:s d M Y', $transaction->date)->toDateString();

                info("{$transaction->date} {$transaction->terminalId}");

                if (!isset($terminals[$transaction->terminalId])) {

                    $endDate = new Carbon('2019-05-01');

                    for ($i = 0; $i < 70; $i++) {
                        $terminals[$transaction->terminalId][$endDate->addDay()->toDateString()] = [
                            "Activations" => 0,
                            "Top-ups" => 0,
                        ];
                    }
                }

                // check terminalID
                // check transaction type
                // parse date

                if (!isset($terminals[$transaction->terminalId][$transaction->date])) {
                    $terminals[$transaction->terminalId][$transaction->date] = [
                        "Activations" => 0,
                        "Top-ups" => 0,
                    ];
                }

                if ($transaction->transactionTypesId === 26) {
                    $terminals[$transaction->terminalId][$transaction->date]["Activations"] += 1;
                }

                //            if ($transaction->transactionTypesId === 20) {
                //                $terminals[$transaction->terminalId][$transaction->date]["Top-ups"] += 1;
                //            }

            }

            $this->makeCsv($terminals, "reports/" . $agent . "-" . date('ymd His') . ".csv");
        }

        return "Processing complete";
    }

    public function makeCsv($terminals, $name) {

        $fp = fopen($name, 'w');

        foreach ($terminals as $key => $fields) {

            $row = [];

            $row[] = "Terminal ID";

            foreach ($fields as $index => $day) {
                $row[] = $index;
            }

            fputcsv($fp, $row);

            break;

        }

        foreach ($terminals as $key => $fields) {

            $row = [];

            $row[] = $key;

            foreach ($fields as $index => $day) {
                $row[] = $fields[$index]["Activations"];
            }

            fputcsv($fp, $row);

        }

        fclose($fp);
    }
}
