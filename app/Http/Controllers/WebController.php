<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WebController extends Controller
{
    public function about() {


        return view('web.about');
    }
    public function pricing() {
        $posts = Http::get('https://spanishsolicitors.com/wp-json/wp/v2/posts?per_page=8')->json();
        return view('web.pricing', compact('posts'));
    }
}
