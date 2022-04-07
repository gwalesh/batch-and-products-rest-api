<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Product;
use App\Models\Batch;
use App\Models\BatchProduct;

class UtilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'id'                =>          1,
                'name'              =>          "Nycil Talc",
                'slug'              =>          "nycil-talc",
                'price'             =>          "299.00",
                'image'             =>          "",
                'updated_at'        =>          Carbon::now(),
                'created_at'        =>          Carbon::now(),
            ],
            [
                'id'                =>          2,
                'name'              =>          "Hair Serum",
                'slug'              =>          "hair-serum",
                'price'             =>          "499.00",
                'image'             =>          "",
                'updated_at'        =>          Carbon::now(),
                'created_at'        =>          Carbon::now(),
            ],
            [
                'id'                =>          3,
                'name'              =>          "Fairness Cream",
                'slug'              =>          "fairness-creme",
                'price'             =>          "349.00",
                'image'             =>          "",
                'updated_at'        =>          Carbon::now(),
                'created_at'        =>          Carbon::now(),
            ],
            [
                'id'                =>          4,
                'name'              =>          "Cinthol Deodrant",
                'slug'              =>          "cinthol-deodrant",
                'price'             =>          "199.00",
                'image'             =>          "",
                'updated_at'        =>          Carbon::now(),
                'created_at'        =>          Carbon::now(),
            ],
            [
                'id'                =>          5,
                'name'              =>          "Beard Oil",
                'slug'              =>          "Beard Oil",
                'price'             =>          "799.00",
                'image'             =>          "",
                'updated_at'        =>          Carbon::now(),
                'created_at'        =>          Carbon::now(),
            ],
            [
                'id'                =>          6,
                'name'              =>          "Foundation",
                'slug'              =>          "foundation",
                'price'             =>          "1499.00",
                'image'             =>          "",
                'updated_at'        =>          Carbon::now(),
                'created_at'        =>          Carbon::now(),
            ],
            
        ];

        Product::insert($products);

        $batches = [
            [
                'id'                =>      1,
                'name'              =>      "Batch One",
                'slug'              =>      "batch-one",
                'price'             =>      "1599.00",
            ],
            
            [
                'id'                =>      2,
                'name'              =>      "Batch Two",
                'slug'              =>      "batch-two",
                'price'             =>      "1999.00",
            ],
        ];

        Batch::insert($batches);

        $batchProduct = [
            [
                'id'            =>          1,
                'product_id'    =>          '1',
                'batch_id'      =>          '1',
                'price'         =>          '510',
                'quantity'      =>          '1',
            ],
            [
                'id'            =>          2,
                'product_id'    =>          '2',
                'batch_id'      =>          '1',
                'price'         =>          '610',
                'quantity'      =>          '1',
            ],
            [
                'id'            =>          3,
                'product_id'    =>          '3',
                'batch_id'      =>          '1',
                'price'         =>          '710',
                'quantity'      =>          '1',
            ],
            [
                'id'            =>          4,
                'product_id'    =>          '1',
                'batch_id'      =>          '2',
                'price'         =>          '810',
                'quantity'      =>          '1',
            ],
            [
                'id'            =>          5,
                'product_id'    =>          '2',
                'batch_id'      =>          '2',
                'price'         =>          '1510',
                'quantity'      =>          '1',
            ],
            [
                'id'            =>          6,
                'product_id'    =>          '3',
                'batch_id'      =>          '2',
                'price'         =>          '910',
                'quantity'      =>          '1',
            ],
        ];

        BatchProduct::insert($batchProduct);
    }
}
