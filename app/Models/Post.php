<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $timestamps = false;
    protected $guarded = ['id'];

    public function getRouteKeyName()
    {
    	return 'slug';
    }

    protected static function boot()
    {
    	parent::boot();

    	static::creating(function($posts) {
    		$posts->slug = str_slug($posts->name);
    	});

        static::creating(function($pages) {
            $pages->slug = str_slug($pages->name);
        });
    }
}
