<?php

namespace App\Builders;

use Illuminate\Database\Eloquent\Builder;

class AddressBuilder extends Builder
{
    public function verified()
    {
        return $this->where('verified' , true);
    }
}