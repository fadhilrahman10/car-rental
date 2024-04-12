<?php

namespace App\Livewire;

use App\Models\Car;
use Livewire\Component;

class CarCreate extends Component
{
    public $brand = '';
    public $type = '';
    public $plat_number = '';
    public $rate_per_day = '';

    public function save()
    {
        $create = Car::create([
            'brand' => $this->brand,
            'type' => $this->type,
            'plat_number' => $this->plat_number,
            'rate_per_day' => $this->rate_per_day,
        ]);

        dd($create);

        session()->flash('status', 'Car successfully created.');

        return $this->redirect('/dashboard');
    }

    public function render()
    {
        return view('livewire.car-create');
    }
}
