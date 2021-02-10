<?php

namespace App\Models;

use App\Http\Controllers\LocationController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'parent',
    ];

    public function parent()
    {
        return $this->belongsTo(Location::class, 'parent_id');
    }


    public function children()
    {
        return $this->belongsTo(Location::class, 'parent_id');
    }

    public function category()
    {
        return $this->belongsTo(Location::class);
    }

    public function rezerve(){
        return $this->hasMany(Rezervation::class);
    }
}
