<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 30/04/20
 * Time: 7:55
 */

namespace App\Http\Controllers;


use Doctrine\ORM\EntityManager;
use Domain\Organization\Organization;
use Domain\Security\Services\AuthenticationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthenticationController extends Controller
{
    public function login(Request $request, EntityManager $entityManager)
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


            if ($validator->fails()) {
                return redirect('login')
                    ->withErrors($validator)
                    ->withInput();
            }

            if (Auth::attempt(
                [
                    'email' => $email,
                    'password' => $password,
                    'deleted_at' => null,
                ])) {
                return redirect()->route('home');
            } else {
                return redirect('login')
                    ->withErrors(['email' => __('Wrong email or password')])
                    ->withInput();
            }

            return view('page.home');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('login');
    }
}