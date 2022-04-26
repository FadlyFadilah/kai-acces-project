<?php

namespace App\Http\Livewire\Statsiun;

use App\Models\Statsiun;
use Livewire\Component;

class Edit extends Component
{
    public $statsiunId;
    public $nama;
    public $lokasi;

    public function mount($id)
    {
        $statsiun = Statsiun::find($id);

        if ($statsiun) {
            $this->statsiunId = $statsiun->id;
            $this->nama = $statsiun->nama;
            $this->lokasi = $statsiun->lokasi;
        }
    }

    public function update()
    {
        $this->validate([
            'nama' => 'required',
            'lokasi' => 'required',
        ]);

        if ($this->statsiunId) {
            $statsiun = Statsiun::find($this->statsiunId);

            if ($statsiun) {
                $statsiun->update([
                    'nama' => $this->nama,
                    'lokasi' => $this->lokasi,
                ]);
            }
        }
        
        session()->flash('message', 'Data Berhasil Diubah');

        return redirect()->route('statsiun.index');
    }

    public function render()
    {
        return view('livewire.statsiun.edit');
    }
}
