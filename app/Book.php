<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    protected $fillable = [
        'title',
        'authors',
        'image',
        'publisher_id'
    ];


    public function publisher()
    {
        return $this->belongsTo('App\Publisher', 'publisher_id');
    }

    public function bookshops()
    {
        return $this->belongsToMany('App\Bookshop');
    }
}
