<?php

namespace App\Http\Livewire\Admin;

use App\Models\Donor;
use Livewire\Component;

class Donorlist extends Component

{


    public function inactivestatus($id)
    {

        $user = Donor::find($id);
        $user->status = 0;
        $user->save();
        session()->flash('success', 'Donor Inactivate Successfully');
    }


    public function activestatus($id)
    {
        $user = Donor::find($id);
        $user->status = 1;
        $user->save();
        session()->flash('successfullyactivated', 'Donor Activate Successfully');
    }


    public function render()
    {
        $data = Donor::orderBy('id', 'desc')->get();
        return view('livewire.admin.donorlist', compact('data'));
    }
}
