<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Slider;
use App\Models\Review;
use App\Models\Listing;
use App\Models\WorkingStructure;
use App\HomeSlider;

class SiteController extends Controller
{
    public function homepage() {
        $homeslider = HomeSlider :: where ('status', 'PUBLISHED')->get();
        $slider = Slider :: where ('status', 'PUBLISHED')->get();
        $posts = Post :: where ('status', 'PUBLISHED')->get();
        $author = User :: all();
        $reviews = Review :: all();
        $listings = Listing:: all();
        $contents = WorkingStructure:: all();
        // dd($post);
        return view('index', compact('posts', 'homeslider', 'slider', 'reviews', 'listings', 'contents'));
    }
}
