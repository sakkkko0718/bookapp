<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'title' => 'required',
        'author' => 'required'
    );

    public function getData(){
        return $this -> id . ': ' . $this -> title . $this -> author;
    }
}
