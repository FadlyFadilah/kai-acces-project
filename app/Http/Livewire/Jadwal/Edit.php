<?php

namespace App\Http\Livewire\Jadwal;

use App\Models\Jadwal;
use Livewire\Component;

class Edit extends Component
{
    public $jadwalId;
    public $pergi;
    public $pulang;

    public function mount($id)
    {
        $jadwal = Jadwal::find($id);

        if ($jadwal) {
            $this->jadwalId = $jadwal->id;
            $this->pergi = $jadwal->pergi;
            $this->pulang = $jadwal->pulang;
        }
    }

    public function update()
    {
        $this->validate([
            'pergi' => 'required',
            'pulang' => 'required',
        ]);

        if ($this->jadwalId) {
            $jadwal = Jadwal::find($this->jadwalId);

            if ($jadwal) {
                $jadwal->update([
                    'pergi' => $this->pergi,
                    'pulang' => $this->pulang,
                ]);
            }
        }
        
        session()->flash('message', 'Data Berhasil Diubah');

        return redirect()->route('jadwal.index');
    }
    public function render()
    {
        return view('livewire.jadwal.edit');
    }
}
