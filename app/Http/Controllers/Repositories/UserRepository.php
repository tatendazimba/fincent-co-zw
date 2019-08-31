<?php


namespace App\Http\Controllers\Repositories;


use App\Http\Controllers\Interfaces\UserInterface;
use App\User;

class UserRepository implements UserInterface
{

    protected $users;

    public function __construct(User $users)
    {
        $this->users = $users;
    }

    public function index()
    {
        return $this->users->paginate();
    }
}
