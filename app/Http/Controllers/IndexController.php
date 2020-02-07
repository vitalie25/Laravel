<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    
    public function index(){
        $hw = 'Hello World!';
        $ms = 'This is a template for a simple marketing or informational website. It includes a large callout called a jumbatron and three supporting pieces of content. use it as a starting point to create something more unique';

        return view('index')->with(['hw'=>$hw, 'ms' => $ms]);   
    }
}
