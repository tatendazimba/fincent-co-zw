<?php


namespace App\Http\Controllers\Interfaces;


interface CustomerInterface
{
    public function register($mobile);
    public function cards($mobile);
    public function getAgents();
    public function transactions($mobile, $range);
    public function login($mobile, $password);
    public function blockCard($mobile, $cardId);
    public function setPin($mobile, $pin);
    public function kyc($mobile, $firstname, $lastname, $idNumber, $dob, $email="");
}
