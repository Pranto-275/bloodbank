<?php

namespace App\Http\Livewire\User;

use App\Models\BloodGroup;
use App\Models\Donor;
use Livewire\Component;

class Search extends Component
{
    public $bloodgroup, $search;

    public function searchvalue()
    {
        if ($this->bloodgroup != null) {
            $this->search = $this->bloodgroup;
            session()->flash('message', 'hello');
        }
    }


    public function render()
    {
        $search = '%' . $this->search . '%';
        $data = Donor::where('blood_group', 'Like', $search)->where('status', 1)->orderBy('id', 'desc')->paginate(6);
        $group = BloodGroup::orderBy('id', 'desc')->get();
        return view('livewire.user.search', compact('data', 'group'));
    }
}
