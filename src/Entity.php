<?php

declare(strict_types=1);

namespace MyNamespace;

use Carbon\Carbon;

class Entity
{
    private Carbon $createdAt;
    
    public function __construct() 
    {
        $this->createdAt = Carbon::now();
    }
}
