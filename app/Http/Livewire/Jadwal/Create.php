<?php

namespace App\Http\Livewire\Jadwal;

use App\Models\Jadwal;
use Livewire\Component;

class Create extends Component
{
    public $pergi;
    public $pulang;

    public function store()
    {
        $this->validate([
            'pergi' => 'required',
            'pulang' => 'required',
        ]);

        $jadwal = Jadwal::create([
            'pergi' => $this->pergi,
            'pulang' => $this->pulang,
        ]);

        session()->flash('message', 'Data Jadwal Berhasil Disimpan');

        return redirect()->route('jadwal.index');
    }
    public function render()
    {
        return view('livewire.jadwal.create');
    }
}
