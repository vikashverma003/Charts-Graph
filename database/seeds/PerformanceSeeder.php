<?php

use Illuminate\Database\Seeder;

use App\UserPerformanc;
use Illuminate\Support\Facades\DB;

class PerformanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_performances')->insert([
            'user_id' => "1",
            'performance' => 10,
            'created_at'=>\Carbon\Carbon::now(),
                        'updated_at'=>\Carbon\Carbon::now(),
        ]);
         DB::table('user_performances')->insert([
            'user_id' => "1",
            'performance' => 8,
            'created_at'=>\Carbon\Carbon::now(),
             'updated_at'=>\Carbon\Carbon::now(),
        ]);
        DB::table('user_performances')->insert([
            'user_id' => "2",
            'performance' => 5,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);

          DB::table('user_performances')->insert([
            'user_id' => "3",
            'performance' => 3,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
           DB::table('user_performances')->insert([
            'user_id' => "4",
            'performance' => 10,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
            DB::table('user_performances')->insert([
            'user_id' => "5",
            'performance' => 2,            
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);

            DB::table('user_performances')->insert([
            'user_id' => "6",
            'performance' => 9,
             'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
             DB::table('user_performances')->insert([
            'user_id' => "7",
            'performance' => 5,
             'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        ]);
              DB::table('user_performances')->insert([
            'user_id' => "8",
            'performance' => 8,
            'created_at'=>\Carbon\Carbon::now(),
           'updated_at'=>\Carbon\Carbon::now(),
        ]);
                DB::table('user_performances')->insert([
            'user_id' => "4",
            'performance' => 3,
             'created_at'=>\Carbon\Carbon::now(),
             'updated_at'=>\Carbon\Carbon::now(),
        ]);

    }
}
