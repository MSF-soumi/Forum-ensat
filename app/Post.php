<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
<<<<<<< HEAD
    protected $table = 'post_details';
	public $timestamps = true;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'titre', 'contenu','date', 
	];
=======
    public function user() {
        return $this->belongsTo('App\User', 'ID_U', 'id');
     }

     protected $fillable = [
        'titre','contenu'
         ];
     
>>>>>>> f57710209ba70d2770e13ab36528f428662345f8
}
