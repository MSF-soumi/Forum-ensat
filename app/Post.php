<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $primaryKey = 'ID_P';

    public function user()
         {
            return $this->belongsTo('App\User', 'ID_U', 'id');
            return $this->belongsTo(Comment::class);
         }
    

     
     protected $fillable = [
        'titre','contenu'
         ];


         protected $guarded = [];

         
     
         
         public function comments()
         {
            return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
         }
    

}
