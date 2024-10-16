<?php

namespace App\Entities;

class Cup
{
    public string $type;
    public Coffee|null $content;
    public int $amountOfSugar;

    public function __construct(string $type, Coffee|null $content = null, ?int $amountOfSugar = 0)
    {
        $this->type = $type;
        $this->content = $content;
        $this->amountOfSugar = $amountOfSugar;
    }

    public function __set(string $name, int $value)
    {
        if (strtolower($name) === 'amountofsugar') {
            $this->amountOfSugar = $value;
        }
    }

}

