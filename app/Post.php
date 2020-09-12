<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $primaryKey = 'ID_P';

    public function user()
         {
            return $this->belongsTo('App\User', 'ID_U', 'id');
      
    }

    
     protected $fillable = [
        'titre','contenu'
         ];


         protected $guarded = [];

         
     
         
                  /**
          * One to Many relation
         *
         * @return \Illuminate\Database\Eloquent\Relations\HasMany
         */
         public function comments()
         {
            return $this->hasMany(Comment::class,'post_id');
         }
    


}
