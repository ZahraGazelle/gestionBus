<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guichet extends Model
{
    //
    protected $fillable = array('id','numero','clients_id','user_id');
    public static $rules = array('id'=>'required|min:5',
                                'numero'=>'required|min:10',
                                'clients_id'=>'required|integer',
                                'user_id'=>'required|bigInteger');

    public function guichet()
    {
        return $this->belongsTo('App\Client');
    }
}
