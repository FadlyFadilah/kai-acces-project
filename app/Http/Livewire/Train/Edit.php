<?php

namespace App\Http\Livewire\Train;

use App\Models\Train;
use Livewire\Component;

class Edit extends Component
{
    public $trainId;
    public $nama;
    public $kelas;

    public function mount($id)
    {
        $train = Train::find($id);

        if ($train) {
            $this->trainId = $train->id;
            $this->nama = $train->nama;
            $this->kelas = $train->kelas;
        }
    }

    public function update()
    {
        $this->validate([
            'nama' => 'required',
            'kelas' => 'required',
        ]);

        if ($this->trainId) {
            $train = Train::find($this->trainId);

            if ($train) {
                $train->update([
                    'nama' => $this->nama,
                    'kelas' => $this->kelas,
                ]);
            }
        }
        
        session()->flash('message', 'Data Berhasil Diubah');

        return redirect()->route('train.index');
    }

    public function render()
    {
        return view('livewire.train.edit');
    }
}
