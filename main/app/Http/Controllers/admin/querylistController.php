<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class querylistController extends Controller
{

    public function queryList()
    {
        $data = Contact::orderBy('id', 'desc')->get();
        return view('admin.managequery', compact('data'));
    }
}
