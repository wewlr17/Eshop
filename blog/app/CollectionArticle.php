<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CollectionArticle extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titre', 'categories_name'
    ];
}
