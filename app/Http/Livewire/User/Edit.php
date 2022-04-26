<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;

class Edit extends Component
{
    public $userId;
    public $name;
    public $email;
    public $password;

    public function mount($id)
    {
        $user = User::find($id);

        if ($user) {
            $this->userId = $user->id;
            $this->name = $user->name;
            $this->email = $user->email;
            $this->password = $user->password;
        }
    }

    public function update()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($this->userId) {
            $user = User::find($this->userId);

            if ($user) {
                $user->update([
                    'name' => $this->name,
                    'email' => $this->email,
                    'password' => $this->password,
                ]);
            }
        }
        
        session()->flash('message', 'Data Berhasil Diubah');

        return redirect()->route('user.index');
    }

    public function render()
    {
        return view('livewire.user.edit');
    }
}
