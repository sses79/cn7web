<?php

namespace App\Http\Controllers;

use Cartalyst\Sentinel\Laravel\Facades\Activation;
use Sentinel;
use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\User;
use App\Http\Requests;
use View;
use Validator;
use Redirect;
use Lang;
use URL;

class BackAuthController extends BaseController
{
    /**
     * Account sign in.
     *
     * @return View
     */
    public function getLogin()
    {
        // Is the user logged in?
        if (Sentinel::check()) {
            return Redirect::route('dashboard');
        }

        // Show the page
        return View::make('backend.login');
    }

    /**
     * Account sign in form processing.
     *
     * @param Request $request
     * @return Redirect
     */
    public function postLogin(Request $request)
    {
        // Declare the rules for the form validation
        $rules = array(
            'email'    => 'required|email',
            'password' => 'required|between:3,32',
        );

        // Create a new validator instance from our validation rules
        $validator = Validator::make($request->only('email', 'password'), $rules);

        // If validation fails, we'll exit the operation now.
        if ($validator->fails()) {
            // Ooops.. something went wrong
            return Redirect::back()->withInput()->withErrors($validator);
        }

        try {
            // Try to log the user in
            Sentinel::authenticate($request->only('email', 'password'), $request->input('remember-me', 0));
            return Redirect::route("dashboard")->with('success', Lang::get('auth/message.login.success'));
        } catch (UserNotFoundException $e) {
            $this->messageBag->add('email', Lang::get('auth/message.account_not_found'));
        } catch (UserNotActivatedException $e) {
            $this->messageBag->add('email', Lang::get('auth/message.account_not_activated'));
        } catch (UserSuspendedException $e) {
            $this->messageBag->add('email', Lang::get('auth/message.account_suspended'));
        } catch (UserBannedException $e) {
            $this->messageBag->add('email', Lang::get('auth/message.account_banned'));
        }

        // Ooops.. something went wrong
        return Redirect::back()->withInput()->withErrors($this->messageBag);
    }

    /**
     * Logout page.
     *
     * @return Redirect
     */
    public function getLogout()
    {
        // Log the user out
        Sentinel::logout();

        // Redirect to the users page
        return Redirect::to('backend/login')->with('success', 'You have successfully logged out!');
    }

    //return
    public function getLockscreen()
    {
        return view('backend.lockscreen');
    }

}
