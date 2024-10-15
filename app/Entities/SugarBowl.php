<?php

namespace App\Entities;

class SugarBowl
{
    public int $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }
}
