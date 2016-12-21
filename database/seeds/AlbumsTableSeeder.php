<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('albums')->insert([
            'band_id'=>'1',
            'name'=>'Hounds of Love',
            'recorded_date'=>Carbon::createFromDate(1985,1,1),
            'release_date'=>Carbon::createFromDate(1985,9,15),
            'number_of_tracks'=>'12',
            'label'=>'EMI',
            'producer'=>'Kate Bush',
            'genre'=>'alternative',
        ]);
        
        DB::table('albums')->insert([
            'band_id'=>'1',
            'name'=>'Aerial',
            'recorded_date'=>Carbon::createFromDate(2004,1,1),
            'release_date'=>Carbon::createFromDate(2005,11,7),
            'number_of_tracks'=>'16',
            'label'=>'EMI/Columbia',
            'producer'=>'Kate Bush',
            'genre'=>'art rock',
        ]);
        
        DB::table('albums')->insert([
            'band_id'=>'2',
            'name'=>'Abort',
            'recorded_date'=>Carbon::createFromDate(1991,1,1),
            'release_date'=>Carbon::createFromDate(1991,3,1),
            'number_of_tracks'=>'12',
            'label'=>'Slash/Warner Bros',
            'producer'=>'unknown',
            'genre'=>'alternative rock',
        ]);
        
        DB::table('albums')->insert([
            'band_id'=>'3',
            'name'=>'Ghost in my Head',
            'recorded_date'=>Carbon::createFromDate(2009,1,1),
            'release_date'=>Carbon::createFromDate(2009,6,16),
            'number_of_tracks'=>'10',
            'label'=>'Master Rock, Inc.',
            'producer'=>'Patrick McCarthy',
            'genre'=>'folk rock',
        ]);
        
        DB::table('albums')->insert([
            'band_id'=>'3',
            'name'=>'I Do',
            'recorded_date'=>Carbon::createFromDate(2011,1,1),
            'release_date'=>Carbon::createFromDate(2015,10,2),
            'number_of_tracks'=>'11',
            'label'=>'Master Rock, Inc.',
            'producer'=>'Jill Hennessy',
            'genre'=>'folk rock',
        ]);
    }
}
