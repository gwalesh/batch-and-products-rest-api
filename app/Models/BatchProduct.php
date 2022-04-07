<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BatchProduct extends Model
{
    use HasFactory;

    protected $filllable = [
        'product_id',
        'batch_id',
        'price',
        'quantity',
        'created_at',
        'updated_at',
    ];

    public function batch()
    {
        return $this->belongsTo(Batch::class, 'batch_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
