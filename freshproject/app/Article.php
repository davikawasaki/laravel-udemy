<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // Allow all parameters to be manipulated
    // protected $guarded = [];

    // Set which parameters can be manipulated
    protected $fillable = ['title', 'excerpt', 'body'];

    // @override function to get a route key name from a model request
    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }

    public function path()
    {
        return route('articles.show', $this);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
