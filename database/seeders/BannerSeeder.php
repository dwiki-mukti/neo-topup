<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 7; $i++) {
            Banner::create([
                'thumbnail' => 'IMAGE_BANNER_' . $i,
                'priority' => $i,
                'active' => 1
            ]);
        }
    }
}
