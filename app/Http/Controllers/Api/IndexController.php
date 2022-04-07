<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Batch;
use App\Models\BatchProduct;

class IndexController extends Controller
{
    public function products()
    {
        $products = Product::orderBy('created_at','desc')->get();

        return response()->json([
            'status'        =>  true,
            'products'      =>  $products,
        ]);
    }

    public function batches()
    {
        $batches = Batch::with('batchProducts')->orderBy('created_at','desc')->get();

        return response()->json([
            'status'    =>  true,
            'batches'   =>  $batches,
        ]);
    }
}
