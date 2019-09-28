<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Framework;
class SigninController extends Controller
{

  public function form()
  {
    $frameworks = Framework::all();
    return view('index',['frameworklist'=>$frameworks]);
  }

}
