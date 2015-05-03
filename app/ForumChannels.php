<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ForumChannels extends Model {
    protected $table = 'forum_channels';
    protected $fillable = ['name'];

    public function thread(){

        return $this->hasMany('ForumThreads', 'channel', 'id');

    }

}
