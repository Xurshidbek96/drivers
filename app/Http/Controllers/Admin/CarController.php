<?php

namespace App\Http\Controllers\Admin;

use App\Models\Car;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;
use App\Models\Driver;
use Illuminate\Http\Request;

class CarController extends Controller
{

    public function index()
    {
        $cars = Car::orderBy('id','desc')->paginate(10);

        return view('admin.cars.index', compact('cars'));
    }

    public function create()
    {
        $drivers = Driver::doesntHave('car')->get();

        return view('admin.cars.create', compact('drivers'));
    }

    
    public function store(Request $request)
    {
        Car::create($request->all());
        return redirect()->route('admin.cars.index')->with('success', 'Bajarildi');
    }

    public function show(Car $car)
    {
        return view('admin.cars.show', compact('car'));
    }

    
    public function edit(Car $car)
    {
        $drivers = Driver::doesntHave('car')->get();
        
        return view('admin.cars.edit', compact('car', 'drivers'));
    }

   
    public function update(UpdateCarRequest $request, Car $car)
    {
        $car->update($request->all());
        return redirect()->route('admin.cars.index')->with('success', 'Bajarildi');
    }

    
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route('admin.cars.index')->with('success', 'Bajarildi');
    }
}