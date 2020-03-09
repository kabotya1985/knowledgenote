<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Framework;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        // useridを取得
        $id = Auth::id();
        // パラメータを取得
        $keyword = $request->get('keyword');
        
        // パラメータが指定ありだった場合
        $framework_list = [];
        if ($keyword != "") {
            $sql = "SELECT * FROM framework WHERE name LIKE '%".$keyword."%' OR description LIKE '".$keyword."'";
            $framework_list = DB::select($sql);
        } else {
            $framework_list = Framework::all();
        }
        return view('index/index',[
            'framework_list' => $framework_list,
            'keyword' => $keyword,
            'id' => $id
        ]);
    }

}
