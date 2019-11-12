<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Member;
use App\Http\Requests\MemberRequest;

class SignupController extends Controller
{

  public function form()
  {
    return view('signup/form',[]);
  }

  public function confirm(MemberRequest $request)
  {
    $param = $request->all();
    return view('signup/confirm',['param'=>$param]);
  }

  public function done(MemberRequest $request)
  {
    $param = $request->all();
    unset($param['_token']);
    unset($param['confirm']);
    Member::insert($param);
    return view('signup/done',['param'=>$param]);
  }

}
