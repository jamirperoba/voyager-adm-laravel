<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class About extends Model
{
	protected $fillable= ['title','year','description','photo'];
	
	public function about(){ 
		return $this->belongsTo(About::class); 
	}
}
