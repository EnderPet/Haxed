<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ForumThreads extends Model {

    protected $table = 'forum_threads';

    protected $fillable = ['title', 'content', 'replies', 'created_by', 'updated_by'];

}
