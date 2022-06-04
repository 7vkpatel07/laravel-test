<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use App\Models\Workshop;

class Event extends Model
{
	public function workshop()
	{
	    return $this->hasMany(Workshop::class);
	}

	public function futureworkshop()
	{
	    return $this->hasMany(Workshop::class)->where('start' , '>', now());
	}
}
