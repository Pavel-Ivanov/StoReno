<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommonController extends Controller
{

    public function index()
    {
//        return 'Common Controller';
        return view('common.home');
    }
}
