<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        if(Auth::check())
        {
            return view('dashboard');
        }
        else
        {
            return view('layouts.auth.login');
        }
    }

    public function postlogin(Request $request)
    {
        $rules = array(
            'username' => 'required|min:3|max:50',
            'password' => 'required|min:5|max:50'
        );

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()) {
            return Redirect::to('login')->withInput($request->all())->with('error', 'Ungültige Eingaben!');
        }
        else
        {
            $userdata = array(
                'username' => $request->input('username'),
                'password' => $request->input('password'),
                'checkbox' => $request->input('checkbox')
            );

            if(Auth::attempt(['name' => $userdata['username'], 'password' => $userdata['password']], $userdata['checkbox']))
            {
                return Redirect::to('dashboard')->withInput($request->all())->with('success', 'Login erfolgreich');
            }
            else
            {
                return Redirect::to('login')->withInput($request->all())->with('error', 'Ungültige Eingaben!');
            }
        }
    }
}
