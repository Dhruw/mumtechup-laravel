<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReccordController extends Controller
{
    public function index(){
		return view('techmeetup');
		// return "<center>This is Mumbai Tech Meetup</center>";
	}
}
