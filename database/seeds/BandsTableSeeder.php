<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bands')->insert([
            'name'=>'Kate Bush',
            'start_date'=>Carbon::createFromDate(1978,1,1),
            'website'=>'http://www.katebush.com/',
            'still_active'=>'1',
        ]);
        
        DB::table('bands')->insert([
            'name'=>'Tribe',
            'start_date'=>Carbon::createFromDate(1987,1,1),
            'website'=>'http://www.tribeonline.info/',
            'still_active'=>'0',
        ]);
        
        DB::table('bands')->insert([
            'name'=>'Jill Hennessy',
            'start_date'=>Carbon::createFromDate(2003,1,1),
            'website'=>'http://jillhennessy.com/',
            'still_active'=>'1',
        ]);
    }
}
