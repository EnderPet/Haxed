<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model {

    protected $table = 'news';
    protected $fillable = ['title', 'content', 'user_id'];

    public function users()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

}