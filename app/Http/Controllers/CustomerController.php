<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Interfaces\CustomerInterface;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    protected $customer;
    protected  $today;
    protected  $yesterday;

    public function __construct(CustomerInterface $customer)
    {
        $now = Carbon::now();

        $this->customer = $customer;
        $this->today = Carbon::now()->format("d/m/Y - d/m/Y");
        $this->yesterday =  Carbon::now()->yesterday()->format("d/m/Y - d/m/Y");
        $this->week = Carbon::now()->startOfWeek(Carbon::SUNDAY)->format('d/m/Y') . " - " . Carbon::now()->format("d/m/Y");
        $this->month = Carbon::now()->startOfMonth()->format('d/m/Y') . " - " . Carbon::now()->format("d/m/Y");
        $this->lastMonth = Carbon::now()->startOfMonth()->subMonth()->format('d/m/Y') . " - " . Carbon::now()->subMonth()->endOfMonth()->format("d/m/Y");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session()->forget(["mobile", "otp", "code", "description"]);
        return view("register");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        session()->forget(["mobile", "otp", "code", "description"]);
        return view("register");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        session()->forget(["code", "description"]);

        $validatedData = $request->validate([
            'mobile' => 'required'
        ]);

        $mobile = $validatedData["mobile"];

        if (!$request->has("otp")) {

            session()->forget(["mobile", "otp", "code", "description"]);

            $response = $this->customer->register($mobile);

            session()->put("mobile", $mobile);

            if ($response->code === "00") {
                session()->put("otp", $response->otp);
            } else {
                session()->put("code", $response->code);
                session()->put("description", $response->description);
            }
        } else {
            $otp = $request->input("otp");

            // validate otp
            if ($otp === session("otp")) {

                $validatedData = $request->validate([
                    'pin' => 'required|min:4|confirmed'
                ]);

                $pin = $request->input("pin");

                // make pin change
                $response = $this->customer->setPin($mobile, $pin);

                if ($response->code === "00") {
                    session()->forget(["mobile", "otp", "code", "description"]);
                    return redirect(route("login.index"));
                } else {
                    session()->put("code", $response->code);
                    session()->put("description", $response->description);
                }
            } else {
                session()->put("code", "87");
                session()->put("description", "Code is incorrect");
            }

        }

        return view("register");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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

    public function blockCard(Request $request) {

        $mobile = session("mobile");

        $validatedData = $request->validate([
            'cardId' => 'required'
        ]);

        $cardId = $validatedData["cardId"];

        $response = $this->customer->blockCard($mobile, $cardId);

        session()->flash("code", $response->code);
        session()->flash("description", $response->description);

        return redirect(action("CustomerController@getCards"));

    }

    public function getTransactions($range = "") {

        $today = $this->today;
        $yesterday = $this->yesterday;
        $thisWeek = $this->week;
        $thisMonth = $this->month;
        $lastMonth = $this->lastMonth;

        if (!$range) {
            $range = $this->today;
        }

        $mobile = session("mobile");

        $response = $this->customer->transactions($mobile, $range);

        $transactions = [];

        if ($response->code === "00") {
            $transactions = array_reverse($response->transaction);
        }

        return view("transactions", compact("transactions", "today", "yesterday", "thisWeek", "thisMonth", "lastMonth", "response"));
    }

    public function getCards() {

        $mobile = session("mobile");

        $response = $this->customer->cards($mobile);

        $cards = [];

        if ($response->code === "00") {
            $cards = $response->cards;
        }

        return view("cards", compact("cards"));
    }

    public function kycUpdate(Request $request) {

        $validatedData = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'idNumber' => 'required|min:6',
            'dob' => 'required|date',
            'email' => 'nullable|email',
        ]);

        $mobile = session("mobile");

        $firstname = $validatedData["firstname"];
        $lastname = $validatedData["lastname"];
        $idNumber = $validatedData["idNumber"];
        $dob = $validatedData["dob"];
        $email = $validatedData["email"];

        $response = $this->customer->kyc($mobile, $firstname, $lastname, $idNumber, $dob);

        if ($response->code === "00") {

            session()->forget(["code", "description"]);
            session()->put("firstname", $firstname);
            session()->put("lastname", $lastname);
            session()->put("idNumber", $idNumber);
            session()->put("dob", $dob);
            session()->put("email", $email);

            return redirect(action("CustomerController@kyc"));

        } else {
            session()->flash("code", $response->code);
            session()->flash("description", $response->description);

            return redirect(action("CustomerController@kyc"))->withInput();
        }
    }

    public function kyc(Request $request) {

        if ($request->session()->has("firstname") && session("firstname") !== "") {
            return redirect(route("customer.transactions"));
        }

        $firstname = session("firstname");
        $lastname = session("lastname");
        $idNumber = session("idNumber");
        $dob = session("dob");

        return view("kyc", compact("firstname", "lastname", "idNumber", "dob"));
    }
}
