<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
	protected $fillable= ['title','icon','link','description'];
	
	public function service(){ 
		return $this->belongsTo(Service::class); 
	}
}