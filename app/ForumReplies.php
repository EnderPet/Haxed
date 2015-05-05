<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ForumReplies extends Model {
    protected $table = 'forum_replies';
    protected $fillable = ['forum_threads_id', 'content', 'created_by'];

    public function author(){
        return $this->belongsTo('App\User', 'created_by', 'id');
    }

    public function thread(){
        return $this->belongsTo('App\ForumThreads', 'forum_threads_id', 'id');
    }

}
