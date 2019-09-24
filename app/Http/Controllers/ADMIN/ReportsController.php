<?php

namespace App\Http\Controllers\ADMIN;

use App\Currency;
use App\Transaction;
use PDF;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportsController extends Controller
{
    public function index() {
        $currencies = Currency::paginate();
        $transactions = Transaction::orderBy("id", "desc")->paginate();

        return view("reports.index", compact("currencies", "transactions"));
    }

    public function generatePDF()
    {
        $customer = [
            "name" => "",
            "transactions" => [],
        ];

        $currencies = Currency::paginate();
        $transactions = Transaction::orderBy("id", "desc")->paginate();

        $pdf = PDF::loadView("reports.index", compact("currencies", "transactions"));

        return $pdf->download('transactions.pdf');
    }
}
