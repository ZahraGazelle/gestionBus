<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    protected $fillable = array('id','nom','prenom','tel');
    public static $rules = array('id'=>'required|min:5',
                                'nom'=>'required|min:3',
                                'prenom'=>'required|min:3',
                                'tel'=>'required|min:9');

    public function guichet()
    {
        return $this->hasMany('App\Guichet');
    }
}
