<?php namespace App\Http\Controllers;

use App\Http\Requests\ContactUsRequest;
use Mail;

class HomeController extends Controller {


	public function index()
	{
		return view('index');
	}

	public function store()
	{
		return view('store');
	}

	public function contact()
	{
		return view('contact');
	}

	public function login()
	{
		return view('login');
	}


    public function contactstore(ContactUsRequest $request)
    {
    	\Mail::send('email',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user_message' => $request->get('message')
        ), function($message)
    {
        $message->from('langdeleon@gmail.com');
        $message->to('langdeleon@gmail.com', 'Admin')->subject('Shoph feedback');
    });

    	return \Redirect::route('contact')
      ->with('message', 'Thanks for the feedback!');
    }


}
