<?php

namespace App\Livewire\Front\Konten;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.front')]
class Grafik extends Component
{
    public function render()
    {
        return view('livewire.front.konten.grafik');
    }
}
