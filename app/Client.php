<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name', 'email', 'password',
    ];

    public function phone()
    {
        return $this->hasOne(Phone::class);
    }
}
