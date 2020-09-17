<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
	protected $table = 'forms';
	protected $primaryKey = 'id';
    protected $fillable = ['title','filename'];
}
