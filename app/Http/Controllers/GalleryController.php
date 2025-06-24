<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        // dd('Gallery Controller Reached');
        return view('frontend.gallery');
    }
}
