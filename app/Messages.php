<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model {

    protected $table = 'messages';
    public $timestamps = false;
    protected $fillable = ['tuid', 'fuid', 'message', 'title'];

    public function user()
    {
        return $this->belongsTo('App\User', 'fuid', 'id');
    }

}