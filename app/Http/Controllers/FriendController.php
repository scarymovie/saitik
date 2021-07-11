<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FriendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $MayFriends = User::all();
        return view('friend.index', ['MayFriends'=>$MayFriends]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $search = $request->get('search');
        $show = User::where('name','LIKE',"%{$search}%")->get() ;

        return view('friend.show',compact('show'));

    }

}
