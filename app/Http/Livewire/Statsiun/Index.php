<?php

namespace App\Http\Livewire\Statsiun;

use App\Models\Statsiun;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function destroy($statsiunId)
    {
        $statsiun = Statsiun::find($statsiunId);

        if($statsiun) {
            $statsiun->delete();
        }

        session()->flash('message', 'Data Berhasil Dihapus.');

        return redirect()->route('statsiun.index');

    }
    public function render()
    {
        $statsiuns = Statsiun::latest()->paginate(5);

        return view('livewire.statsiun.index', compact("statsiuns"));
    }
}
