<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Framework;
use App\Http\Requests\SearchRequest;



class Searchcontroller extends Controller
{

  public function search(SearchRequest $request)
  {
    
    $keyword = $request->input('keyword'); 
    $query = framework::where('name', 'LIKE', "%{$keyword}%")->get();

    return view('search/search',['query' => $query]);

  }

}
