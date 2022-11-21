<?php

namespace Database\Seeders;

use App\Models\GameTrending;
use App\Models\Product;
use Illuminate\Database\Seeder;

class GameTrendingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 6; $i++) {
            try {
                GameTrending::create([
                    'product_id' => $i,
                    'priority' => $i,
                ]);
            } catch (\Throwable $th) {
                #
            }
        }
    }
}
