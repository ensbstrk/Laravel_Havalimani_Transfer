<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $appends = [
        'parent',
    ];
    public function transfer()
    {
        return $this->hasMany(Transfer::class);
    }
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }
    public function children()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }
}
