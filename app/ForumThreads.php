<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ForumThreads extends Model {
    protected $table = 'forum_threads';
    protected $fillable = ['channel', 'title', 'content', 'replies', 'created_by', 'updated_by'];

    public function author(){
        return $this->belongsTo('App\User', 'created_by', 'id');
    }

    public function user(){
        return $this->belongsTo('App\User', 'updated_by', 'id');
    }

    public function channel(){
        return $this->hasOne('App\ForumChannels', 'id', 'channel');
    }

}
