<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;

class ordersController extends Controller
{
    
    //display all customer orders
    public function display(){
        $orders_in = Orders::all();
        return view('orders', compact('orders_in'));

    }
}
