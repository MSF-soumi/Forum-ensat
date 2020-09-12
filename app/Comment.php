<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    
    protected $primaryKey = 'id_c';
   
    protected $guarded = [];

    protected $fillable = [
        'body'
         ];
    
    public function user()
    {
        return $this->belongsTo('app\User','user_id');
    }

     public function post()
     {
         return $this->belongsTo('app\Post','post_id');
     }
    
   
   
    

  
}
