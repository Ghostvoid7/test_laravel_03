<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use function Termwind\render;

class SiteController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function generic()
    {
        return view('generic');
    }

    public function elements()
    {
        return view('elements');
    }

    public function posts()
    {
        return view('posts', ['posts' => Post::all()]);
    }
}
