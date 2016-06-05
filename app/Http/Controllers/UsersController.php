<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use View;
use Validator;
use Session;
use Redirect;
use Lang;
use URL;
use Mail;
use File;
use Hash;
use App\User;
use Cartalyst\Sentinel\Laravel\Facades\Activation;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;

class UsersController extends BaseController
{

    /**
     * Declare the rules for the form validation
     *
     * @var array
     */
    protected $validationRules = array(
        'first_name'       => 'required|min:3',
        'last_name'        => 'required|min:3',
        'email'            => 'required|email|unique:users,email',
        'password'         => 'required|between:3,32',
        'password_confirm' => 'required|same:password',
        'pic'              => 'mimes:jpg,jpeg,bmp,png|max:10000'
    );

    /**
     * Show a list of all the users.
     *
     * @return View
     */
    public function getIndex(Request $request)
    {
        // Grab all the users
        $users = User::All();

        // Do we want to include the deleted users?
        if ($request->input('withTrashed')) {
            $users = User::withTrashed()->get();
        } elseif ($request->input('onlyTrashed')) {
            $users =User::onlyTrashed()->get();
        }

        // Show the page
        return View::make('backend.users.index', compact('users'));
    }

}
