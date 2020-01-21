<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class searchController extends Controller
{
    public function index(Request $r){
        $content = $r->searchtxt;
        // dd($content);
        return view('search.searchPage' , ['content'=>$content]);
    }
}
