<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Capability;
use App\Repositories\Contracts\CapabilityRepositoryInterface;

class CapabilityController extends Controller
{
    /**
     * @var CapabilityRepositoryInterface
     */
    private $repo;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(CapabilityRepositoryInterface $repo)
    {
        $this->repo = $repo;
    }

    public function authentication(Request $request)
    {

        $email = $request->email;
        $password = $request->password;

    	$capability = new capability();
        $capability->authentication($this->repo, $email, $password);

    	return $capability;
    }
}
