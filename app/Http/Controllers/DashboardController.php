<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user_id = auth()->user()->id;
        $user = User::find($user_id);

        //$comments=Comment::all();


        $results =DB::select('SELECT *  FROM comments as co
        INNER JOIN posts as po ON co.post_id = po.id
        INNER JOIN users  as us ON po.user_id = us.id
        where us.id =?',[$user_id]);



        $posts=$user->Posts;


        //return $results;
        return view('dashboard',compact('results'))->with('posts', $posts);
    }
}
