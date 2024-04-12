<?php

namespace App\Livewire;

use App\Models\Car;
use App\Models\Rent;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class ReturnCarList extends Component
{
    use WithPagination, WithoutUrlPagination;
//    public $cars;

    public $query = '';

    public function search()
    {
        $this->resetPage();
    }

    public function finshed($id)
    {
        Rent::find($id)->update(['finished_at' => now()]);

        $this->dispatch('paid');
    }
    public function render()
    {
        $userId = '9bc9da68-ba61-4568-a2f5-016f24194b19';
        $car = Rent::with('car')->where('user_id', $userId)->whereNull('finished_at')->paginate(10);

        return view('livewire.return-car-list', [
            'cars' => $car,
        ]);
    }
}
