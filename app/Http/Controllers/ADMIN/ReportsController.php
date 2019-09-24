<?php

namespace App\Http\Controllers\ADMIN;

use App\Currency;
use App\Transaction;
use Barryvdh\Snappy\Facades\SnappyPdf;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Knp\Snappy\Pdf;

class ReportsController extends Controller
{
    public function index() {
        $currencies = Currency::paginate();
        $transactions = Transaction::orderBy("id", "desc")->paginate();

        return view("reports.index", compact("currencies", "transactions"));
    }

    public function generatePDF($id)
    {

        $customer = [
            "name" => "",
            "transactions" => [],
        ];

        $currencies = Currency::paginate();
        $transaction = Transaction::find($id);

        $pdf = SnappyPdf::loadView("reports.receipt", compact("transaction", "customer"));

        $filename = "Receipt " . Carbon::createFromFormat("Y-m-d H:i:s", $transaction->created_at)->format("Ymd His") . " {$transaction->type} {$transaction->id}.pdf";
        return $pdf->download($filename);
    }
}
