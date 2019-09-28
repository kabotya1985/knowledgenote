<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Framework;
class MemberController extends Controller
{

  public function index()
  {
    $frameworks = Framework::all();
    return view('index',['frameworklist'=>$frameworks]);
  }

  public function edit()
  {
    $frameworks = Framework::all();
    return view('index',['frameworklist'=>$frameworks]);
  }

}
