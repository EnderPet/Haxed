<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model {

    protected $table = 'messages';

    protected $fillable = ['m_tuid', 'm_fuid', 'm_message', 'm_title'];

}