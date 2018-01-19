<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
	protected $fillable= ['name','photo','function'];
	
	public function developer(){ 
		return $this->belongsTo(Developer::class); 
	}
}
