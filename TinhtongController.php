<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TinhtongController extends Controller
{
    public function index(){
        return view('Tong');
    }
    public function Summ(Request $request){
        $result = $request -> numberA + $request -> numberB;
        return view('Tong', compact('result'));
}}