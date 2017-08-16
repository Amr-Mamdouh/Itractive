<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
  public function p1()
  {
  	$well="wellcome";
  	return view("Pages.Page1",compact('well'));
  }  
 }
