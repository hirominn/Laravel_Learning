<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'teamid' => 'clubroom-imbibe-compost',
            'teamname' => 'default',
            'ismyself' => '1',
            'color' => '4169e1',
        ];
        DB::table('teams')->insert($param);

        $param = [
            'teamid' => 'quondam-chimney-wont',
            'teamname' => 'default',
            'ismyself' => '1',
            'color' => 'ffa500',
        ];
        DB::table('teams')->insert($param);

        $param = [
            'teamid' => 'silage-croon-lavish',
            'teamname' => 'default',
            'ismyself' => '0',
            'color' => '7cfc00',
        ];
        DB::table('teams')->insert($param);

        $param = [
            'teamid' => 'militia-manteau-twill',
            'teamname' => 'kstm',
            'ismyself' => '0',
            'color' => 'fa8072',
        ];
        DB::table('teams')->insert($param);
    }
}
