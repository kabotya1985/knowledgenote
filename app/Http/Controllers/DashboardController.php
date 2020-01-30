<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Framework;
use App\Models\Framework_tag;
use App\Models\Tag;
use App\Models\Post;
use App\Http\Requests\FrameworkRequest;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    /*
  public function __construct()
  {
      $this->middleware('auth');
  }
    */
    public function index(Request $request)
  {
       return view('dashboard/index');
  }

  public function post(Request $request)
  {
       return view('dashboard/post');
  }

  public function profile(Request $request)
  {
       return view('dashboard/profile');
  }


  
}
