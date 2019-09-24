<?php

namespace App\Http\Controllers\ADMIN;

use App\Currency;
use App\Rate;
use App\ResponseWrapper;
use App\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currencies = Currency::paginate();
        $transactions = Transaction::paginate();

        return view("transactions.index", compact("currencies", "transactions"));
    }

    public function indexApi()
    {
        $response = new ResponseWrapper("00", "SUCCESS", "SUCCESS");

        try {
            $rates = Rate::select(DB::raw('ANY_VALUE(id) as id, _from, _to, ANY_VALUE(updated_at) as date, ANY_VALUE(buy) as buy, ANY_VALUE(sell) as sell'))
                ->orderBy("id", "asc")
                ->groupBy('_from', '_to')
                ->get();

            $response->results = $rates;

        } catch (\Exception $exception) {
            $response->code = "01";
            $response->description = $exception->getMessage();
            $response->friendly = "Failed to fetch rates. Please try again.";
        }

        return response()->json($response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $currencies = Currency::paginate();
        $transactions = Transaction::paginate();

        return view("transactions.index", compact("currencies", "transactions"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Log::info("TRANSACTION SAVE REQUEST ::: " . json_encode($request->all()));

        $response = new ResponseWrapper("00", "SUCEESS", "SUCCESS");
        try {

            $args = [
                "_to" => $request->input("to"),
                "_from" => $request->input("from"),
                "rate" => $request->input("rate"),
                "from_amount" => $request->input("from_amount"),
                "to_amount" => $request->input("to_amount"),
                "type" => $request->input("type"),
                "status" => "COMPLETE",
                "rate_id" => $request->input("rate_id"),
                "user" => "admin@fincent.co.zw",
                "purpose" => $request->input("purpose"),
            ];

            Log::info("TRANSACTION SAVE PAYLOAD ::: " . json_encode($args));

            $transaction = new Transaction($args);
            $transaction->save();
            $transaction->refresh();

            $response->results = [$transaction];

        } catch (\Exception $exception) {
            $response->code = "01";
            $response->description = $exception->getMessage();
            $response->friendly = "Failed to save transaction";
        }

        Log::info("TRANSACTION SAVE RESPONSE ::: " . json_encode($response->toArray()));

        return response()->json($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
