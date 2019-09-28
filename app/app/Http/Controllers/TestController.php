<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Framework;
class TestController extends Controller
{

  public function index()
  {
    return view('Test/index');
  }

  public function search()
  {
    return view('Test/search');
  }

  public function detail()
  {
    return view('Test/detail');
  }

  public function form()
  {
    return view('Test/form');
  }

  public function confilm()
  {
    return view('Test/confilm');
  }

  public function done()
  {
    return view('Test/done');
  }

  public function member()
  {
    return view('Test/member');
  }

  public function memberedit()
  {
    return view('Test/memberedit');
  }

  public function signin()
  {
    return view('Test/signin');
  }

  public function signupform()
  {
    return view('Test/signupform');
  }

  public function signupconfilm()
  {
    return view('Test/signupconfilm');
  }

  public function signupdone()
  {
    return view('Test/signupdone');
  }
}
