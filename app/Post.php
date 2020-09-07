<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user() {
        return $this->belongsTo('App\User', 'ID_U', 'id');
     }

     protected $fillable = [
        'titre','contenu'
         ];
     
}
