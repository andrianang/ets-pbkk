<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KondisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $namas = [["nama" => "baik"], 
        ["nama" => "layak"], 
        ["nama" => "rusak"]];
        
        DB::table('kondisis')->insert($namas);
    }


}
