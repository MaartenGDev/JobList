<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tag_types')->insert([
            [
                'name' => 'Pro',
                'created_at' => Carbon::now('Europe/Amsterdam'),
                'updated_at' => Carbon::now('Europe/Amsterdam')
            ],
            [
                'name' => 'Con',
                'created_at' => Carbon::now('Europe/Amsterdam'),
                'updated_at' => Carbon::now('Europe/Amsterdam')
            ],
            [
                'name' => 'Tag',
                'created_at' => Carbon::now('Europe/Amsterdam'),
                'updated_at' => Carbon::now('Europe/Amsterdam')
            ]
        ]);
    }
}
