<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Framework;
class MemberController extends Controller
{

  public function index()
  {
    $framework = Framework::all();
    return view('member/index');
  }

  public function edit()
  {
    $frameworks = Framework::all();
    return view('member/edit');
  }

}
