<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    public function index(){
    	$data['current_page'] = 'home';

    	return view('index')->with($data);
    }

    public function aboutus(){

    	$data = array();

    	$data['current_page'] = 'aboutus';

    	return view('aboutus', $data);
    }

    public function contactus(){

    	$data = array();

    	$data['current_page'] = 'contactus';

    	return view('contactus', $data);
    }

    public function index2(){
    	return view('index2');
    }
}
