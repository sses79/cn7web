<?php namespace App\Http\Controllers;

use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Redirect;
use Sentinel;
use View;

class BaseController extends Controller {

	/**
     * Message bag.
     *
     * @var MessageBag
     */
    protected $messageBag = null;

    /**
     * Initializer.
     *
     * @return void
     */
    public function __construct()
    {
        // CSRF Protection
        $this->middleware('web', array('on' => 'post'));

        //
        $this->messageBag = new MessageBag;
    }
    
}