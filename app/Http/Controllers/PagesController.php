<?php

namespace App\Http\Controllers;

use App\ActivationCode;
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
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
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
        $activationCode=ActivationCode::whereCode($token)->first();
        if(! $activationCode){
            dd('not exist');
            return redirect('/');
        }
        if($activationCode->expire<Carbon::now()){
            dd('expire');
            return redirect('/');

        }
        if($activationCode->used ==true){
            dd('used');
            return redirect('/');

        }
        $activationCode->update([
            'used'=>true
        ]);
        $activationCode->user()->update([
            'active'=>1
        ]);

        auth()->loginUsingId($activationCode->user->id);
        return redirect('/');





    }
}
