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


class FrameworkController extends Controller
{
    /*
  public function __construct()
  {
      $this->middleware('auth');
  }
    */
  
  public function index(request $request)
  {
      $id = $request -> get("id");
      $data = Framework::find($id);

      // 事例を取得
      $sql = "SELECT * FROM `case` WHERE framework_id = ?";
      $case_list = DB::select($sql, [$id]);

      return view('framework/detail');

  }

  

}
