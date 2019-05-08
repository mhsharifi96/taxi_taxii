<?php

namespace App\Http\Controllers;

use App\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',

        ]);

        // Handle File Upload


        // Create Post
        $footer = new Footer;
        $footer->email = $request->input('email');
        $footer->save();

        return back()->with('success', 'Post Created');
    }

}
