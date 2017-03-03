<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
    protected $fillable = [
		'user_id',
		'email',
		'body',
		'status'
	];
}
