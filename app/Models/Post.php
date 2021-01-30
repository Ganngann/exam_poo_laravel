<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * GETTER de la categorie à qui appartient ce post.
     */
    public function categorie(){
        return $this->belongsTo('App\Models\Categorie');
    }

    protected $fillable = [
		'title', 'content','image', 'categorie_id',
	];
}
