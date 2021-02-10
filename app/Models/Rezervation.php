<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rezervation extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function car()
    {
        return $this->belongsTo(Transfer::class, 'transfer_id');
    }

    public function pickup_location()
    {
        return $this->belongsTo(Rezervation::class, 'from_location_id');
    }

    public function destination_location()
    {
        return $this->belongsTo(Rezervation::class, 'to_location_id');
    }

    function getLoc()
    {
        return $this->hasOne('App\Models\Location', 'from_location_id', 'transfer_id');
    }
}
