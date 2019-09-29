<?php

namespace App\Http\Controllers;

use App\ActivationCode;
use App\Blog;
use App\Post;
use Carbon\Carbon;
use SEOMeta;
use Twitter;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
         SEOMeta::setTitle('sursiz');
         SEOMeta::setDescription('اولین تاکسی ذهنی درایران');
         Twitter::setTitle('Homepage');
         Twitter::setSite('@taxitaxii1');


        $title = 'Welcome To Laravel!';
        $posts = Post::latest()->orderBy('created_at','desc')->where('available','=',1)->paginate(6);
        $blogs=Blog::latest()->orderby('created_at','desc')->paginate(8);
        //return view('pages.index', compact('title'));
       return view('pages.index')->with('posts',$posts)->with('title', $title)->with('blogs',$blogs);
    }

    public function about(){
        $title = 'About Us';
         SEOMeta::setTitle('درباره ما |sursiz ');
         SEOMeta::setDescription('در ین صفحه می توانید درباره ی تیم ما اطلاعاتی کسب کنید');
         SEOMeta::addKeyword(['sursiz', 'taxi', 'درباره ما','تاکسی ذهنی','تیم ما']);
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }


    public function activation($token){
//        $activationCode=ActivationCode::whereCode($token)->first();
//        if(! $activationCode){
//            dd('not exist');
//            return redirect('/');
//        }
//        if($activationCode->expire<Carbon::now()){
//            dd('expire');
//            return redirect('/');
//
//        }
//        if($activationCode->used ==true){
//            dd('used');
//            return redirect('/');
//
//        }
//
//        $activationCode->user()->update([
//            'active'=>1
//        ]);
//
//        $activationCode->update([
//            'used'=>true
//        ]);
//
//        auth()->loginUsingId($activationCode->user->id);
//        return redirect('/');
//
//
        $activationCode=ActivationCode::whereCode($token)->first();
        if(isset($activationCode) ){
            $user = $activationCode->user;
            if(!$user->active) {
                $activationCode->user->active = 1;
                $activationCode->user->save();
                $status = "کدفعال سازی تایید شد و هم اکنون لاگین شوید.";
            }else{
                $status = "کدفعال سازی را قبلا تایید کرده اید هم اکنون لاگین شوید .";
            }

        }else{
            return redirect('/login')->with('warning', "Sorry your email cannot be identified.");
        }

        return redirect('/login')->with('status', $status);


    }
}
