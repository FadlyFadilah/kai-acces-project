<?php

namespace App\Http\Livewire\Jadwal;

use App\Models\Jadwal;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function destroy($jadwalId)
    {
        $jadwal = Jadwal::find($jadwalId);

        if($jadwal) {
            $jadwal->delete();
        }

        session()->flash('message', 'Data Berhasil Dihapus.');

        return redirect()->route('jadwal.index');

    }
    public function render()
    {
        $jadwals = Jadwal::latest()->paginate(5);

        return view('livewire.jadwal.index', compact("jadwals"));
    }
}
