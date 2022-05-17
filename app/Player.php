<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Player extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'address',
        'description',
        'retired',
    ];

    public function pets()
    {
        return $this->hasMany(Pet::class);
    }
}
