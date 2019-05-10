<?php

namespace App\Http\Controllers;

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
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
