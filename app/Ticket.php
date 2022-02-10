<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //
    protected $fillable = array('id','numero','date');
    public static $rules = array('id'=>'required|min:5',
                                 'numero'=>'required|min:3',
                                 'date'=>'required|min:3');

    public function bus()
    {
        return $this->hasMany('App\Bus');
    }
}
