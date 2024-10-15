<?php

namespace App\Entities;

class Cup
{

    public Coffee $content;
    public string $type;

    public function __construct(?string $type, Coffee $content)
    {
        $this->type = $type;
        $this->content = $content;
    }
}
