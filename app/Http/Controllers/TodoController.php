<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;


class TodoController extends Controller
{
public function index(){
    return view('welcome');
}
public function store(Request $request){
    $todo = new Todo();
    $todo->name= $request->name;
    $todo->email=$request->email;
    $todo->details=$request->details;
    $todo->completed=false;
    $todo->save();
    return redirect('/confirmation');


}

public function form(){
 
    return view('form');
}
}
