<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Town;

class TownsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Town::create([
            'area_id' => 1,
            'town_name' => '野田',
        ]);

        Town::create([
            'area_id' => 1,
            'town_name' => '三ツ相',
        ]);

        Town::create([
            'area_id' => 1,
            'town_name' => '菰口',
        ]);

        Town::create([
            'area_id' => 1,
            'town_name' => '吉川',
        ]);

        Town::create([
            'area_id' => 1,
            'town_name' => '馬見塚',
        ]);

        Town::create([
            'area_id' => 1,
            'town_name' => '小向',
        ]);

        Town::create([
            'area_id' => 1,
            'town_name' => '新栄',
        ]);

        Town::create([
            'area_id' => 1,
            'town_name' => '高洲',
        ]);

        Town::create([
            'area_id' => 1,
            'town_name' => '富久縞',
        ]);

        Town::create([
            'area_id' => 1,
            'town_name' => '問屋',
        ]);

        Town::create([
            'area_id' => 1,
            'town_name' => '青竹',
        ]);

        Town::create([
            'area_id' => 1,
            'town_name' => '吉前',
        ]);

        Town::create([
            'area_id' => 1,
            'town_name' => '神野新田',
        ]);

        //
    }
}
