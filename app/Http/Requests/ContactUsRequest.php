<?php namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Response;

class ContactUsRequest extends FormRequest
{
	public function rules()
    {
         return [
    'name' => 'required',
    'email' => 'required|email',
    'message' => 'required',
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