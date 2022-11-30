<?php

namespace App\Controllers;

use App\Core\App;

class PagesController
{
    public function home()
    {
        $posts = App::get('database')->selectAll('posts');
        return view('index', ['heading' => 'Piotrek Home Page']);
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function posts()
    {
        App::get('database')->insert('posts', [
            "title" => $_POST['title']
        ]);
        return redirect("");
    }
}
