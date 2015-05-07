<?php namespace App\Http\Controllers;

use App\Http\Requests\SignupRequest;

class SignupController extends Controller {


	public function index()
	{
		return view('signup');
	}

	public function CreateStore(SignupRequest $sr){
		return \Redirect::route('signup');
	}



}
