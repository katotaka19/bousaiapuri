<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Institution;

class InstitutionType extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Institution::create([
            'town_id' => '4',
            'institution_name' => '吉田方校区区民館',
        ]);
        //
        Institution::create([
            'town_id' => '3',
            'institution_name' => '吉田方小学校',
        ]);
        //
        Institution::create([
            'town_id' => '2',
            'institution_name' => '三ツ相ポンプ場',
        ]);
        //
        Institution::create([
            'town_id' => '1',
            'institution_name' => 'フォレスト野田',
        ]);
        //
        Institution::create([
            'town_id' => '4',
            'institution_name' => 'サンシティ吉川',
        ]);
        //
        Institution::create([
            'town_id' => '3',
            'institution_name' => 'ラヴィエ・セレナード',
        ]);
        //
        Institution::create([
            'town_id' => '4',
            'institution_name' => '吉田方小学校',
        ]);
        //
        Institution::create([
            'town_id' => '3',
            'institution_name' => '杉浦マンション',
        ]);
        //
        Institution::create([
            'town_id' => '4',
            'institution_name' => '吉田方公園',
        ]);
        //
        Institution::create([
            'town_id' => '5',
            'institution_name' => 'アーバンヒル馬見塚',
        ]);
        //
        Institution::create([
            'town_id' => '5',
            'institution_name' => 'アーバンヒル馬見塚',
        ]);
        //
        Institution::create([
            'town_id' => '8',
            'institution_name' => '吉田方地区市民館',
        ]);
        //
    }
}
