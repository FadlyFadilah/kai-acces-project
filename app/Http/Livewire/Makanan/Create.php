<?php

namespace App\Http\Livewire\Makanan;

use App\Models\Makanan;
use Livewire\Component;

class Create extends Component
{
    public $nama;
    public $size;
    public $harga;

    public function store()
    {
        $this->validate([
            'nama' => 'required',
            'size' => 'required',
            'harga' => 'required',
        ]);

        $makanan = Makanan::create([
            'nama' => $this->nama,
            'size' => $this->size,
            'harga' => $this->harga,
        ]);

        session()->flash('message', 'Data Makanan Berhasil Disimpan');

        return redirect()->route('makanan.index');
    }
    
    public function render()
    {
        return view('livewire.makanan.create');
    }
}
