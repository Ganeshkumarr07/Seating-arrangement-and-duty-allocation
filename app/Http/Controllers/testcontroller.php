<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hall;
class testcontroller extends Controller
{

public function index()
{
    return view('halldetails');
}
    public function store(Request $request)
    {
       $halldet = new hall;
       $halldet->hallno= $request->hallno;
       $halldet->rows= $request->rows;
       $halldet->columns= $request->columns;
       $halldet->save();

       return redirect()->route('index')
       ->with('success','Hall added successfully');


}
}