<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
    //
    public $timestamps=false;
    public $table = "professional";
    protected $primaryKey = 'id';
    protected $fillable = ['id','name','dni','profession'];
}
