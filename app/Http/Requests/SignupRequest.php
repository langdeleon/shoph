<?php namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Response;

class SignupRequest extends FormRequest
{
	public function rules()
    {
        return [
            'username' => 'required',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password',
            'email' => 'required|email',
            'confirm_email' => 'required|same:email',
            'store_name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',

        ];
    }

    public function authorize()
    {
        // Only allow logged in users
        // return \Auth::check();
        // Allows all users in
        return true;
    }

}