<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Framework;
use App\Http\Requests\SearchRequest;

class Searchcontroller extends Controller
{

  public function search(SearchRequest $request)
  {
      $frameworklist = framework::all();
    return view('search/search',['frameworklist'=>$frameworklist]);
  }

}
