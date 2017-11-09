<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // protected $table ='tablename'
    protected $table ='posts';
	public $primaryKey = 'id';
	public $timestamps = true;

}
