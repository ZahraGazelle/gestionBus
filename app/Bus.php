<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    //
    //
    protected $guarded = [];
    public static $rules = array('id'=>'required|min:5',
                                 'NumBus'=>'required|min:5',
                                 'NumImmat'=>'required|min:5',
                                 'NumCartegrise'=>'required|min:5',
                                'tickets_id'=>'required|integer',
                                'user_id'=>'required|bigInteger');

    public function bus()
    {
        return $this->belongsTo('App\Ticket');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
