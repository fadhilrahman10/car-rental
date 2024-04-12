<?php

namespace App\Livewire;

use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Validate;
use App\Models\Car;
use Livewire\Component;

class CarCreateForm extends Component
{
    #[Validate('required')]
    public $brand = '';

    #[Validate('required')]
    public $type = '';

    #[Validate('required')]
    public $plat_number = '';

    #[Validate('required')]
    public $rate_per_day = '';

    public function save(): void
    {
        try {
            $validated = $this->validate([
                'brand' => ['required', 'string'],
                'type' => ['required', 'string'],
                'plat_number' => ['required', 'string'],
                'rate_per_day' => ['required', 'string'],
            ]);
        } catch (ValidationException $e) {
            $this->reset('brand', 'type', 'plat_number', 'rate_per_day');

            throw $e;
        }

        Car::create($validated);

        $this->reset('brand', 'type', 'plat_number', 'rate_per_day');

        $this->dispatch('saved');
    }

    public function render()
    {
        return view('livewire.car-create-form');
    }
}
