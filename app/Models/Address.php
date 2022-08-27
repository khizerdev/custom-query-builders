<?php

namespace App\Models;

use App\Builders\AddressBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    public static function query(): AddressBuilder
    {
         return parent::query();
    }

    public function newEloquentBuilder($query): AddressBuilder
    {
        return new AddressBuilder($query);
    }
}
