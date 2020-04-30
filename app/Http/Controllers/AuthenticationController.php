<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 30/04/20
 * Time: 7:55
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthenticationController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('get')) {
            Auth::logout();
            return view('page.home');
        } else {
            $email = $request->get('email');
            $password = $request->get('password');

            $rules = [
                'email' => 'required|email',
                'password' => 'required',
            ];
            $validator = Validator::make($request->all(), $rules);

            if (Auth::attempt(['email' => $email, 'password' => $password])) {
                return redirect()->route('home');
            }


            if ($validator->fails()) {
                return redirect('login')
                    ->withErrors($validator)
                    ->withInput();
            }

            return view('page.home');
        }
    }
}