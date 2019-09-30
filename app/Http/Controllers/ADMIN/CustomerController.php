<?php

namespace App\Http\Controllers\ADMIN;

use App\Customer;
use App\ResponseWrapper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::orderBy("id", "desc")->paginate();
        return view("customers.index", compact("customers"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::paginate();
        return view("customers.create", compact("customers"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'id_number' => 'required|unique:customers,id_number',
            'mobile' => 'required|unique:customers,mobile',
        ]);

        $response = new ResponseWrapper("00", "SUCCESS", "SUCCESS");

        $customer = new Customer([
            "name" => $request->input("name"),
            "surname" => $request->input("surname"),
            "id_number" => $request->input("id_number"),
            "mobile" => $request->input("mobile"),
        ]);

        try {
            $customer->saveOrFail();
            $response->results = $customer;
        } catch (\Exception $exception) {
            $response->code = "01";
            $response->friendly = "Oops. Failed to complete KYC.";
            $response->description = $exception->getMessage();
        }

        session()->flash("code", $response->code);
        session()->flash("description", $response->description);
        session()->flash("friendly", $response->friendly);

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

    public function all()
    {
        $response = new ResponseWrapper("00", "SUCCESS", "SUCCESS");

        $response->results = Customer::all();

        return response()->json($response);
    }
}
