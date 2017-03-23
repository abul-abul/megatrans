<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AdminLoginRequest;
//use App\Contracts\BackgroundInterface;
use View;
use Session;
use Validator;
use Auth;
use File;


class AdminController extends BaseController
{
	/**
     * AdminController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->middleware('authadmin', ['except' => ['getLogin', 'postLogin','getLogout']]);
    }


    /**
     * @return mixed
     */
    public function getLogin()
    {
        return view('admin.admin-login.admin-login');
    }

    public function postLogin(AdminLoginRequest $request)
    {
    	$name = $request->get('name');
        $password  = $request->get('password');

        if(Auth::attempt ([
            'name'=>$name,
            'password'=>$password,
        ]))
        {
            return redirect()->action('AdminController@getDashboard');
        }else{
            return redirect()->back()->with('error', 'Invalid login or password');
        }	
    }

    public function getLogout()
    {
    	Auth::logout();
        return redirect()->action('AdminController@getLogin');
    }

    public function getDashboard()
    {
    	return view('admin.dashboard.dashboard');
    }
}
