<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{

    public function __invoke()
    {
        return view('livewire.car-create');
    }

    public function create()
    {
        return view('livewire.car-create');
    }

    public function store(Request $request)
    {
        dd("OKE");
        $request->validate([
            'brand' => 'required',
            'type' => 'required',
            'plat_number' => 'required',
            'rate_per_day' => 'required',
        ]);

        Car::create($request->all());

        return redirect()->back();
    }
}
