<?php

namespace App\Http\Livewire\Makanan;

use App\Models\Makanan;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function destroy($makananId)
    {
        $makanan = Makanan::find($makananId);

        if($makanan) {
            $makanan->delete();
        }

        session()->flash('message', 'Data Berhasil Dihapus.');

        return redirect()->route('makanan.index');

    }
    public function render()
    {
        $makanans = Makanan::latest()->paginate(5);

        return view('livewire.makanan.index', compact("makanans"));
    }
}
