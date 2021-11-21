<?php 

namespace App\Http\Controllers;

class HomeController extends Controller {

  function Showberanda(){
    return view('template.dashboard');
  }

}