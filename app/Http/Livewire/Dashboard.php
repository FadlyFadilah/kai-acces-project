<?php

namespace App\Http\Livewire;

use App\Models\Jadwal;
use App\Models\Makanan;
use App\Models\Statsiun;
use App\Models\Train;
use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $train = Train::get()->count();
        $statsiun = Statsiun::get()->count();
        $jadwal = Jadwal::get()->count();
        $makanan = Makanan::get()->count();
        $user = User::get()->count();
        return view('livewire.dashboard', [
            'train' => $train,
            'statsiun' => $statsiun,
            'jadwal' => $jadwal,
            'makanan' => $makanan,
            'user' => $user,
        ]);
    }
}
