<?php

namespace App\Http\Livewire\Makanan;

use App\Models\Makanan;
use Livewire\Component;

class Edit extends Component
{
    public $makananId;
    public $nama;
    public $size;
    public $harga;

    public function mount($id)
    {
        $makanan = Makanan::find($id);

        if ($makanan) {
            $this->makananId = $makanan->id;
            $this->nama = $makanan->nama;
            $this->size = $makanan->size;
            $this->harga = $makanan->harga;
        }
    }

    public function update()
    {
        $this->validate([
            'nama' => 'required',
            'size' => 'required',
            'harga' => 'required',
        ]);

        if ($this->makananId) {
            $makanan = Makanan::find($this->makananId);

            if ($makanan) {
                $makanan->update([
                    'nama' => $this->nama,
                    'size' => $this->size,
                    'harga' => $this->harga,
                ]);
            }
        }
        
        session()->flash('message', 'Data Berhasil Diubah');

        return redirect()->route('makanan.index');
    }
    public function render()
    {
        return view('livewire.makanan.edit');
    }
}
