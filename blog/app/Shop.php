<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_article'
    ];

    public function article()
    { 
        return $this->belongsTo('App\Article', 'id_article');
    }
}
