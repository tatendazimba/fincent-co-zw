<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Interfaces\RegisterInterface;
use App\User;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    protected $api;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(RegisterInterface $api)
    {
        $this->middleware('guest');
        $this->api = $api;
    }

    public function index() {
        return view("auth.register");
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => ['required', 'string', 'max:255'],
            'key' => ['required', 'string', 'in:335357,223217'],
            'fullName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        // build API request payload
        $payload = [
            "id" => 3,
            "userId" => 3,
            "admin" => true,
            "name" => $request["fullName"],
            "email" => $request["email"],
            "enabled" => false,
            "username" => $request["username"],
            "password" => $request["password"],
            "confirm_password" => $request["password"],
            "action" => "Duplicate",
        ];

        // make API call
        $apiReponse = $this->makeApiCall("user/add", $payload);

        $request->session()->flash("code", $apiReponse->code);
        $request->session()->flash("description", $apiReponse->description);

        return redirect()->back()->withInput();

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        $response = $this->api->register();

        // build API request payload
        $payload = [
            "id" => 3,
            "userId" => 3,
            "admin" => true,
            "name" => $data["fullName"],
            "email" => $data["email"],
            "enabled" => false,
            "username" => $data["username"],
            "password" => $data["password"],
            "confirm_password" => $data["password"],
            "action" => "Duplicate",
        ];

        $apiReponse = $this->makeApiCall("user/add", $payload);

        if ($apiReponse->code === "00") {
            return User::create([
                'username' => $data['username'],
                'fullName' => $data['fullName'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);
        } else {
            dd($apiReponse);
        }
    }

    public function sendMail()
    {

    }

    public function makeApiCall($uri, $payload) {

        $client  = app(Client::class);

        // TODO clean this up

        try {
            $response = $client->post($uri, [
                "json" => $payload
            ]);

            if ($response->getStatusCode() === 200) {

                $resp = json_decode($response->getBody());

                info(json_encode($resp));

                return $resp;

            } else {

                $r = array(
                    "code" => "92",
                    "description" => $response->getMessage()
                );

                info(json_encode($r));

                return (object) $r;
            }

        } catch (GuzzleException $e) {

            $r = array(
                "code" => "92",
                "description" => $e->getMessage()
            );

            info(json_encode($r));

            return (object) $r;
        }

    }
}
