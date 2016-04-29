<?php

namespace App\Repositories\Contracts;

use Illuminate\Http\Request;
use App\Http\Requests;

/**
 * Interface CapabilityRepository
 * @package App\Repositories\Contracts
 */
interface CapabilityRepositoryInterface
{
    public function authentication($email, $password);

}