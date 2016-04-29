<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Repositories\Contracts\CapabilityRepositoryInterface;
use Illuminate\Support\Facades\Crypt;

/**
 * Class CapabilityRepositoryDB
 * @package App\Repositories
 */
class CapabilityRepositoryDB implements CapabilityRepositoryInterface 
{
    public function authentication($email, $password) 
    {
    	$auth = User::join('person_user', 'person_user.user_id', '=', 'users.id')
    		->join('persons', 'persons.id', '=', 'person_user.person_id')
    		->select('*')
    		->where('email', '=', $email)
            ->get()
            ->count();

        dd($auth);

        return $auth;
    }

}