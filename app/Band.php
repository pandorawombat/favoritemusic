<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    protected $fillable = ['name','start_date','website','still_active'];
    
    public function albums(){
        return $this->hasMany('App\Album');
    }
}
