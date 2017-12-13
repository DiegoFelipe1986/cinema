<?php

class AuthController extends BaseController {

    public function showLogin()
    {
    	if (Auth::check())
    	{
    		return Redirect::to('/');
    	}
    	return View::make('login');
    }

    public function postLogin()
    {
    	$userdata = ['usuario' => Input::get('userName'), 'password' => Input::get('userPass')];
    	if (Auth::attempt($userdata))
    	{
          if (Auth::user()->is_admin) {
            return Redirect::to('admin');
          }
          else{
            return Redirect::to('hoyos');
          }

    	}

    	return Redirect::to('login')
    				->with('mensaje_error', 'El usuario y/o contraseña son incorrectos')
    				->withInput();
    }
     public function logOut()
    {
        Auth::logout();
        return Redirect::to('login')
                    ->with('mensaje_error', 'Tu sesión ha sido cerrada.');
    }
}
