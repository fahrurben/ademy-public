<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 30/04/20
 * Time: 6:29
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('page.home');
        }
    }
}