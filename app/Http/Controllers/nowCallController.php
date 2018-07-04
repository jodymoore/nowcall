<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class nowCallController extends Controller
{
     /*
     *  Show
     */
    public function show(Request $request) {
        return view('siteEntry');
    }
}
