<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use  App\Http\Controllers\Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\ContactUs;

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

    public function application(){

        $data = array();

        $data['current_page'] = 'application';
        
        return view('application', $data);
    }

    public function creditApplication(){
        $data = array();

        $data['current_page'] = 'GET PRE-APPROVED';
        
        return view('creditApplication', $data);
    }

    public function index2(){
    	return view('index2');
    }

    public function saveContactUs(Request $request){

        $input = $request->input();

        $cu =  new ContactUs;
        $cu->full_name = $input['inputName'];
        $cu->email = $input['inputEmail'];
        $cu->phone = $input['inputPhone'];
        $cu->body = $input['inputMessage'];
        $cu->subject = $input['inputSubject'];

        $cu->save();
        // Mail::send('email', $input, function($message)
        // {
        //     $message->to('reza.shayesteh@gmail.com', 'Reza Shayesteh')->subject('New Lead');
        // });
        //dd($input);
        return "success";
    }
}
