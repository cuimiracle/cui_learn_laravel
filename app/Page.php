<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model {

	public function belongsToUser()
	{
		return $this->belongsTo('User', 'user_id', 'id');
	}

	public function hasManyComments()
	{
		return $this->hasMany('App\Comment', 'page_id', 'id');
	}

}
