<?php

namespace App\Http\Livewire\Train;

use App\Models\Train;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function destroy($trainId)
    {
        $train = Train::find($trainId);

        if($train) {
            $train->delete();
        }

        session()->flash('message', 'Data Berhasil Dihapus.');

        return redirect()->route('train.index');

    }
    public function render()
    {
        $trains = Train::latest()->paginate(5);

        return view('livewire.train.index', compact("trains"));
    }
}
