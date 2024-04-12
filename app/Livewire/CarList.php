<?php

namespace App\Livewire;

use App\Models\Car;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class CarList extends Component
{
    use WithPagination, WithoutUrlPagination;
//    public $cars;

    public $query = '';

    public function search()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.car-list', [
            'cars' => Car::whereNotIn('id', function ($query) {
                $query->select('car_id')
                    ->whereNull('finished_at')
                    ->from('rents');
            })->where(function ($query) {
                $query->where('brand', 'like', '%'.$this->query.'%')
                    ->orWhere('type', 'like', '%'.$this->query.'%');
            })->paginate(10),
        ]);
    }
}
