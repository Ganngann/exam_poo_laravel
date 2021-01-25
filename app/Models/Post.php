<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * GETTER du author à qui appartient ce post.
     */
    public function author(){
        return $this->belongsTo('App\Models\Author');
    }

    /**
     * GETTER de la categorie à qui appartient ce post.
     */
    public function categorie(){
        return $this->belongsTo('App\Models\Categorie');
    }

    /**
     * GETTER des comments du post.
     */
    public function comments() {
        return $this->hasMany('App\Models\Comment');
    }

    /**
     * GETTER des tags du post.
     */
    public function tags() {
      return $this->belongsToMany('App\Models\Tag', 'posts_has_tags');
    }
}
