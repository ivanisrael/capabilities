<?php

namespace App\Output;

use App\Output\Contracts\CapabilityShowInterface;

class CapabilityShowText implements CapabilityShowInterface
{

    public function show($user)
    {
        return $user;
    }
    
}