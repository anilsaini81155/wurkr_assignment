<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Session;

class UserController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        
    }

    public function showUserDashboard() {
        $data['headTitle'] = "UserMessages";
        return view('messagesview',compact('data'));
    }

}
