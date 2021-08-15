<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todos')->insert([

            [
               'name' => 'Task 1',
               'created_at'=>Carbon::now(),
               'updated_at'=>Carbon::now(),
            ],

            [
                'name' => 'Task 2',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
            
            [
                'name' => 'Task 3',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],
            
            [
                'name' => 'Task 4',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ],



        ]);
    }
}
