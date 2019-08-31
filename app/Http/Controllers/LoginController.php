<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Interfaces\CustomerInterface;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    protected $customer;

    public function __construct(CustomerInterface $customer)
    {
        $this->customer = $customer;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session()->forget(["mobile", "client", "code", "description", "firstname", "lastname"]);
        return view("login");
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
        // TODO validate
        $mobile = $request->mobile;
        $password = $request->password;

        $response = $this->customer->login($mobile, $password);

        if ($response->code === "00") {

            session()->put("mobile", $mobile);
            session()->put("firstname", $response->client->firstname);
            session()->put("lastname", $response->client->lastname);
            session()->put("idNumber", $response->client->idNumber);
            session()->put("dob", $response->client->dob);
            session()->put("email", $response->client->email);

            return redirect(route("customer.kyc"));

        } else {

            session()->flash("code", $response->code);
            session()->flash("description", $response->description);

//            dd(session()->all());

            return view("login");
        }
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
