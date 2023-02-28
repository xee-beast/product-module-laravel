<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $guarded = [];

    /**
     * Get the user's full name.
     *
     * @return Attribute
     */
    protected function fullName(): Attribute
    {
        return new Attribute(
            get: fn ($value,$attributes) => (
                $attributes['first_name']. ' '.$attributes['last_name']
            ),
        );
    }
}
