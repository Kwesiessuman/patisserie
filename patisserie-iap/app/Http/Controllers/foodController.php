<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class foodController extends Controller
{
    public function index(){
        return view('food');
    }
    public function add(request $request){
        $food=new Food;
        $food->image=request()->file('image')->store('public/images');
        $food->foodname=request('foodname');
        $food->description=request('description');
        $food->price=request('price');
        $food->save();
        echo $food;
        //return redirect('menu.php');
    }

    public function update(request $request){
        $food=Food::find($id);
        $food->foodname=request('foodname');
        $food->description=request('description');
        $food->price=request('price');
        $food->save();
        echo $food;
        
    }
    public function delete(){
        $food=Food::find($id);
        $food->delete();
    }
}
