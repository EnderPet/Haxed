<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Burner extends Model {
    protected $table = 'burners';
    protected $fillable = ['name', 'max_capacity', 'price', 'level_requirement'];

    public function user(){
        return $this->belongsTo('App\User', 'burner_id', 'id');
    }

}
