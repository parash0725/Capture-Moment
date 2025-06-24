<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $team = [
            [
                'name' => 'Karishma Bhandari',
                'image' => 'images/karis.jpg',
                'description' => 'With a keen eye for detail and a love for natural light, Manisha has over a decade of experience capturing breathtaking moments, from intimate weddings to grand cultural events.',
                'twitter' => '#',
                'instagram' => '#',
                'facebook' => '#',
            ],
            [
                'name' => 'Yamraj Joshi',
                'image' => 'images/yam.jpg',
                'description' => 'Mark brings a wealth of artistic expertise and a unique vision to the team. His ability to craft visually compelling stories ensures each project reflects the individuality of our clients.',
                'twitter' => '#',
                'instagram' => '#',
                'facebook' => '#',
            ],
            [
                'name' => 'Sagar Tiwari',
                'image' => 'images/sagar.jpg',
                'description' => 'Cvans’s expert editing skills bring each photo to life, ensuring every image we deliver is polished, vibrant, and aligned with the client’s vision.',
                'twitter' => '#',
                'instagram' => '#',
                'facebook' => '#',
            ],
        ];

        return view('frontend.about', compact('team'));
    }
}