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
        return redirect('menu')->with('success','Menu updated');
    }

    public function update(request $request){
        $food=Food::find($id);
        $food->image=request()->file('image')->store('public/images');
        $food->foodname=request('foodname');
        $food->description=request('description');
        $food->price=request('price');
        $food->save();
        return redirect('menu')->with('success','Food updated');
    }
    
    public function delete(request $request){
        $food=Food::find($id)->request;
        $food->delete();

    }
    
    public function menu(){
        $menu1 = Food::all();
        return view('menu', compact('menu1'));  
        return redirect('menu')->with('success','Food deleted');
    }
}
