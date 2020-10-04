<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome()
    {
        return view('index');
    }

    public function getAboutUs()
    {
        return view('about');
    }
    public function getCourses()
    {
        return view('courses');
    }
    public function getGallery()
    {
        return view('gallery');
    }
    public function getBlog()
    {
        return view('blog');
    }
    public function getBlogSingle()
    {
        return view('blog-single');
    }

    public function getOnlineClasses()
    {
        return view('online-classes');
    }
}
