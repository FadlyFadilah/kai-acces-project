<?php

namespace App\Http\Livewire\Train;

use App\Models\Train;
use Livewire\Component;

class Create extends Component
{
    public $nama;
    public $kelas;

    public function store()
    {
        $this->validate([
            'nama' => 'required',
            'kelas' => 'required',
        ]);

        $train = Train::create([
            'nama' => $this->nama,
            'kelas' => $this->kelas,
        ]);

        session()->flash('message', 'Data Kereta Berhasil Disimpan');

        return redirect()->route('train.index');
    }

    public function render()
    {
        return view('livewire.train.create');
    }
}
