<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pet extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'player_id',
        'name',
        'color',
    ];

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}
