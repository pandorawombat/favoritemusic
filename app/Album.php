<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = ['name','band_id','number_of_tracks','label',
        'recorded_date','release_date','producer','genre'];
    
    public function band(){
        return $this->belongsTo('App\Band');
    }
}
