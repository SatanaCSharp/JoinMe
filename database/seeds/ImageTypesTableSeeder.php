<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ImageTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('image_types')->insert([
            'type' => 'avatar',
        ]);
        DB::table('image_types')->insert([
            'type' => 'event',
        ]);
    }
}
