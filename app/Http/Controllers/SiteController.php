<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Slider;
use App\HomeSlider;

class SiteController extends Controller
{
    public function homepage() {
        $homeslider = HomeSlider :: where ('status', 'PUBLISHED')->get();
        $slider = Slider :: where ('status', 'PUBLISHED')->get();
        $post = Post :: where ('status', 'PUBLISHED')->get();
        $author = User :: all();
        // dd($post);
        return view('index', compact('post', 'homeslider', 'slider'));
    }
}
