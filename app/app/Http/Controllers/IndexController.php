<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Framework;

class IndexController extends Controller
{

  public function index()
  {
    $frameworks = Framework::all();
    return view('index/index',['frameworklist'=>$frameworks]);
  }

}
