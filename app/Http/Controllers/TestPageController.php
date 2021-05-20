<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestPageController extends Controller
{
    public function index($userid){
        $page = User::where('id',$userid)->first();
        return view('pages.index', compact('page'));
    }

}
