<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BloodGroup;
use App\Models\Contact;
use App\Models\Donor;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function dashboard()
    {
        $group = BloodGroup::count();
        $donor = Donor::count();
        $query = Contact::count();
        return view('admin.dashboard', compact('group', 'donor', 'query'));
    }
}
