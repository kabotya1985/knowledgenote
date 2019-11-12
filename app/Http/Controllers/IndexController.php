<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\App\models\Framework;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{

  public function index()
  {
    $frameworks = Framework::all();
    return view('index/index',['frameworklist'=>$frameworks]);
  }

}
