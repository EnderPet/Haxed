<?php namespace App\Http\Controllers;

use App\Warehouse;
use Illuminate\Support\Facades\View;

class WarehouseController extends Controller {

    public function __construct(){
    }

    public function index(){
        $warehouses = Warehouse::where('id', '>', '0')->where('premium', '=', '0')->orderBy('price', 'DESC')->get();
        $premiumWarehouses = Warehouse::where('id', '>', '0')->where('premium', '=', '1')->orderBy('price', 'DESC')->get();
        return view('warehouse.index')->with(array('warehouses' => $warehouses, 'premiumWarehouses' => $premiumWarehouses));
    }

}