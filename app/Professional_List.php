<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professional_List extends Model
{
    //
    public $timestamps=false;
    public $table = "professional_list";
    protected $primaryKey = 'id';
    protected $fillable = ['id','','month','point','descryption'];
}
