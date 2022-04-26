<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;

class Create extends Component
{
    public $name;
    public $email;
    public $password;

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ]);

        session()->flash('message', 'Data User Berhasil Disimpan');

        return redirect()->route('user.index');
    }

    public function render()
    {
        return view('livewire.user.create');
    }
}
