<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {
    
    protected $fillable = ['body'];
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function comments() {
        return $this->hasMany(Comment::class);
    } 
    public function getHumanCreatedAtAttribute() {
        return $this->created_at->diffForHumans();
    }  
}
