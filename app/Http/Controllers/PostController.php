<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Post $post)
    {

        DB::table('posts')->insert(array("user_id"=>Auth::id(),
            "essence"=>$request->essence));
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($userId)
    {
        $posts = Post::query()
            /*->with('latest_post')*/
            ->where('user_id', $userId)
            ->get();
        return view('users.index',['posts'=>$posts,
            'user_id'=>$userId]);
    }
    public function destroy(Post $post)
    {

        $post->delete();

        return redirect()->back();
    }


}
