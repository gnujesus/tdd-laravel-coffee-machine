<?php

namespace App\Entities;

class Coffee
{

    public string $flavor;

    public function __construct(?string $flavor)
    {
        $this->flavor = $flavor;
    }
}
