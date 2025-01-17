<?php

namespace App\Http\Controllers\ADMIN;

use App\Currency;
use App\Rate;
use App\ResponseWrapper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class RateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currencies = Currency::paginate();
        $rates = Rate::orderBy("id", "desc")
            ->paginate();

        return view("rates.index", compact("currencies", "rates"));
    }

    public function indexApi()
    {
        $response = new ResponseWrapper("00", "SUCCESS", "SUCCESS");

        try {

            $rates = Rate::select("id", "_from", "_to", "buy", "sell", "updated_at")
                ->orderBy("id", "desc")
                ->get()
                ->unique(function ($item) {
                    return $item['_from'].$item['_to'];
                })
                ->values()->all();

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Rate::create([
            "_to" => $request->input("to"),
            "_from" => $request->input("code"),
            "buy" => $request->input("buy"),
            "sell" => $request->input("sell"),
            "user" => auth()->user()->email,
        ]);

       return back();
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
