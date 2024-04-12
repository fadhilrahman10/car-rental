<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class RentController extends Controller
{
    public function __invoke($id)
    {
        $car = Car::find($id);

        return view('rent', compact('car'));
    }
}
