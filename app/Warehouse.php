<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model {
    protected $table = 'warehouses';
    protected $fillable = ['name', 'max_capacity', 'price', 'level_requirement'];

    public function user(){
        return $this->belongsTo('App\User', 'warehouse_id', 'id');
    }

}