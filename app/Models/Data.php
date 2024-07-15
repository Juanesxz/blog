<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;


    protected function casts()
    {
        return [
            'email' => 'email',
        ];
    }


    protected function name(): Attribute
    {

        return Attribute::make(
            get: function ($value) {
                return str_replace("an", "mo", $value);
            }
        );
    }
}
