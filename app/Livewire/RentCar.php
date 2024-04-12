<?php

namespace App\Livewire;

use App\Models\Rent;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class RentCar extends Component
{
    public string $car_id = '';
    public string $user_id = '9bc9da68-ba61-4568-a2f5-016f24194b19';
    public string $start_rent = '';
    public string $end_rent = '';

    /**
     * Update the password for the currently authenticated user.
     */
    public function rentCar(): void
    {
        try {
            $validated = $this->validate([
                'car_id' => ['required', 'string'],
                'user_id' => ['required', 'string'],
                'start_rent' => ['required'],
                'end_rent' => ['required'],
            ]);
        } catch (ValidationException $e) {
            $this->reset('start_rent', 'end_rent');

            throw $e;
        }

//        dd($validated);
        Rent::create($validated);

        $this->reset('start_rent', 'end_rent');

        $this->dispatch('saved');
    }

    public function render()
    {
        return view('livewire.rent-car');
    }
}
