<?php

namespace App\Http\Controllers;

use App\Comment;
use SEOMeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;
use DB;

class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show','search']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        SEOMeta::setTitle('آخرین درخواست های کاربران |sursiz ');
        SEOMeta::setDescription('آخرین پست های کاربران را مشاهده میفرمایید. ');
        SEOMeta::addKeyword(['sursiz', 'taxi', 'همراه','تاکسی ذهنی','درخواست']);
        //$posts = Post::all();
        //return Post::where('title', 'Post Two')->get();
        //$posts = DB::select('SELECT * FROM posts');
        //$posts = Post::orderBy('title','desc')->take(1)->get();
        //$posts = Post::orderBy('title','desc')->get();


            $posts = Post::latest()->orderBy('created_at','desc')->where('available','=',1)->paginate(8);
        return view('posts.index')->with('posts', $posts);

    }


    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'tag' => 'required',
            'cover_image'=> 'image|nullable|max:1999'
        ]);

        // Handle File Upload
        if($request->hasFile('cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        // Create Post
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->tag = $request->input('tag');
        $post->account = $request->input('account');
        $post->user_id = auth()->user()->id;
        $post->cover_image = $fileNameToStore;
        $post->category_id = $request->input('category_id');
        $post->save();

        return redirect('/dashboard')->with('success', 'درخواستتان ایجاد شد');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {




        $post = Post::find($id);

        SEOMeta::setTitle($post->title);
        SEOMeta::setDescription(str_limit($post->body,120));
        SEOMeta::addMeta('post:created_time', $post->created_at, 'property');
        SEOMeta::addKeyword(explode(",", $post->tag));

        $user=auth()->user();
        if($post->available==1){
            $comments=Comment::all()->where('available','=',1)->where('post_id','=',$id);
            return view('posts.show',compact('comments','user'))->with('post', $post);
        }
        else{
            print('not access');
        }


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        // Check for correct user
//        if(auth()->user()->id !==$post->user_id){
//            return redirect('/posts')->with('error', 'صفحه غیر مجاز');
//        }

        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

         // Handle File Upload
        if($request->hasFile('cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        }

        // Create Post
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->tag = $request->input('tag');
        $post->account = $request->input('account');
        $post->category_id = $request->input('category_id');
        $post->body = $request->input('body');
        $post->available = 2;
        if($request->hasFile('cover_image')){
            $post->cover_image = $fileNameToStore;
        }
        $post->save();

        return redirect('/dashboard')->with('success', 'درخواست شما ثبت گردید:)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        // Check for correct user
        if(auth()->user()->id !==$post->user_id){
            return redirect('/posts')->with('error', 'Unauthorized Page');
        }

        if($post->cover_image != 'noimage.jpg'){
            // Delete Image
            Storage::delete('public/cover_images/'.$post->cover_image);
        }
        
        $post->delete();
        return redirect('/dashboard')->with('success', 'درخواستتان حذف شد');
    }

    public function search(){
        $keyword=request('search');
        $posts=Post::search($keyword)->where('available','=',1)->paginate(8);
                return view('posts.index',compact('posts'));



    }


}

