<?php

namespace App;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Repositories\Contracts\CapabilityRepositoryInterface;

class Capability
{
	private $barangay;

	public function authentication(CapabilityRepositoryInterface $repo, $email, $password)
	{
		return $repo->authentication($email, $password);
	}

}
