<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataProducts = [
            [
                "name" => "Mobile Legend",
                "category" => "topup",
                "thumbnail" => "Mobile-Legend.jpg",
                "x_slug" => "mobile-legend",
                "fields" => json_encode([
                    "id_player" => "string",
                ])
            ],
            [
                "name" => "Free Fire",
                "category" => "topup",
                "thumbnail" => "Free-Fire.jpg",
                "x_slug" => "free-fire",
                "fields" => json_encode([
                    "id_player" => "string",
                ])
            ],
        ];

        foreach ($dataProducts as $dataProduct) {
            $product = Product::create($dataProduct);

            $dataItems = [
                [
                    'name' => 'DM 89',
                    'x_code' => 'dm-89',
                    'price' => 10000
                ],
                [
                    'name' => 'DM 150',
                    'x_code' => 'dm-150',
                    'price' => 15000
                ]
            ];
            foreach ($dataItems as $dataItem) {
                Item::create([
                    'product_id' => $product->id,
                    'name' => $dataItem['name'],
                    'x_code' => $dataItem['x_code'],
                    'price' => $dataItem['price'] + 1000,
                ]);
            }
        }
    }
}
