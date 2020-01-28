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
    public function index(Request $request) {

        $startDate = $request->has("startDate") ? $request->input("startDate") : Carbon::today()->toDateString();
        $endDate = $request->has("endDate") ? $request->input("endDate") : Carbon::today()->toDateString();

        $startDate .= " 00:00:00";
        $endDate .= " 23:59:59";

        $currencies = Currency::paginate();
        $transactions = Transaction::whereBetween('created_at', [$startDate, $endDate])->orderBy("id", "desc")->paginate();

        return view("reports.index", compact("currencies", "transactions"));
    }

    public function filterTransactions(Request $request) {
        $startDate = $request->startDate;
        $startDate = $request->startDate;
    }

    public function generatePDF($id)
    {

        $customer = [
            "name" => "",
            "transactions" => [],
        ];

        $currencies = Currency::paginate();
        $transaction = Transaction::with("customer")->find($id);

        $pdf = SnappyPdf::loadView("reports.receipt", compact("transaction", "customer"));

        $filename = "Receipt " . Carbon::createFromFormat("Y-m-d H:i:s", $transaction->created_at)->format("Ymd His") . " {$transaction->type} {$transaction->id}.pdf";
        return $pdf->download($filename);
    }
}
