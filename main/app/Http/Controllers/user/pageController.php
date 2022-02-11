<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class pageController extends Controller
{
    public function index()
    {
        $data = Page::where('page_name', 'About Us')->orderBy('id', 'desc')->first();
        return view('user.about', compact('data'));
    }


    public function whydonor()
    {
        $data = Page::where('page_name', 'Why Donor')->orderBy('id', 'desc')->first();
        return view('user.whydonor', compact('data'));
    }
}
