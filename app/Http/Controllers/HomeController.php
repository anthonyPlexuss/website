<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use  App\Http\Controllers\Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

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

    public function saveContactUs(Request $request){

        $input = $request->input();

        Mail::send('email', $input, function($message)
        {
            $message->to('reza.shayesteh@gmail.com', 'Reza Shayesteh')->subject('New Lead');
        });
        dd($input);
    }
}
