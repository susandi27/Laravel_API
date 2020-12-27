<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
    	'name','logo',
	];

	public function item()
    {
    	return $this->hasMany('App\Item');
    }
}
