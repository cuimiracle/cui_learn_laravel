<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {

	protected $fillable = ['nickname', 'email', 'website', 'content', 'page_id'];

    public function belongsToPage()
    {
        return $this->belongsTo('Page', 'page_id', 'id');
    }
}	
