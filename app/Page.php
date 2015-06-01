<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model {

	public function belongsToUser()
	{
		return $this->belongsTo('User', 'user_id', 'id');
	}

}
