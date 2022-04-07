<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'price',
        'created_at',
        'updated_at',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function batchProducts()
    {
        return $this->hasMany(BatchProduct::class);
    } 
}
