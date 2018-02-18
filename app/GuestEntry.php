<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuestEntry extends Model
{
    protected $fillable = [
        'user_id',
        'entry',
        'location'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
