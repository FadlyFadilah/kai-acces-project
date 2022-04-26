<?php

namespace App\Http\Livewire\Statsiun;

use App\Models\Statsiun;
use Livewire\Component;

class Create extends Component
{
    public $nama;
    public $lokasi;

    public function store()
    {
        $this->validate([
            'nama' => 'required',
            'lokasi' => 'required',
        ]);

        $statsiun = Statsiun::create([
            'nama' => $this->nama,
            'lokasi' => $this->lokasi,
        ]);

        session()->flash('message', 'Data Statsiun Berhasil Disimpan');

        return redirect()->route('statsiun.index');
    }

    public function render()
    {
        return view('livewire.statsiun.create');
    }
}
