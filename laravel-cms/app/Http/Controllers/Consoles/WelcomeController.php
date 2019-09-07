<?php

namespace App\Http\Controllers\Consoles;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WelcomeController extends CommonController
{
    public function welcome()
    {
    	return view('consoles.welcome');
    }
}
