<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = ['Titre','category_id','Price','Description','Etat','Adresse','Phone','Ville','slug','users_id','limit','active'];

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function tags(){
        return $this->belongsToMany('App\Tags');
    }

    public function users(){
        return $this->belongsTo('App\User','users_id');
    }

    public function photos()
    {
        return $this->hasMany('App\Upload');
    }
    
}
