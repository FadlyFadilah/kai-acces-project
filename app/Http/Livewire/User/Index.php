<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function destroy($userId)
    {
        $user = User::find($userId);

        if($user) {
            $user->delete();
        }

        session()->flash('message', 'Data Berhasil Dihapus.');

        return redirect()->route('user.index');

    }
    public function render()
    {
        $users = User::latest()->paginate(5);

        return view('livewire.user.index', compact("users"));
    }
}
