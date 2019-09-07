<?php

namespace App\Http\Controllers\Consoles;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends CommonController
{
    public function index()
    {
    	return view('consoles.index');
    }
}
