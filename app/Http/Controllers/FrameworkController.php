<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Framework;
use App\Models\Framework_tag;
use App\Models\Tag;
use App\Models\Post;
use App\Http\Requests\FrameworkRequest;
use App\Http\Requests\PostRequest;



class FrameworkController extends Controller
{
    /*
  public function __construct()
  {
      $this->middleware('auth');
  }
    */
  
  public function detail(request $request)
  {
      $id = $request -> get("id");
      $data = Framework::find($id);
     
      return view('framework/detail',['data'=>$data]);

  }

  public function form(FrameworkRequest $request)
  {
    if(!empty($id))
    {
      $id = $request -> get("id");
      $data = Framework::find($id);
    }
    else
    {
      $id = 1;
      $data = Framework::find($id);       
    }
        
    return view('framework/form',['data'=>$data]); 
  }

  

  public function confirm(FrameworkRequest $request)
  {
        $id = $request -> get("id");
        $data = Framework::find($id);
        $param = $request->all();
    
        return view('framework/confirm',['param'=>$param,'data'=>$data]);
  }

  public function done(PostRequest $request)
  {
          $param = $request->all();
          unset($param['_token']);
          unset($param['confirm']);
          $apram['member']=0;
          Post::insert($param);



          return view('framework/done',['param'=>$param]);
  }

}
