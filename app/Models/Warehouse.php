<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Warehouse extends Model
{
    use HasFactory, SoftDeletes;

    public $timestamps = false;

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
