<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Driver;
use App\Models\Rating;
use Illuminate\Http\Request;

class DriverController extends Controller
{

    public function index()
    {
        $drivers = Driver::orderBy('id','desc')->paginate(10);

        return view('admin.drivers.index',compact('drivers'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    
    public function show(Driver $driver)
    {
        return view('admin.drivers.show',compact('driver'));
    }

   
    public function edit($id)
    {
        $driver = Driver::findOrFail($id);
        $rating = Rating::where('driver_id', $id)->first();
        
        return view('admin.drivers.edit', compact('driver', 'rating'));
    }

    
    public function update(Request $request, $id)
    {
        Driver::find($id)->update([
            'distance_uztracking' => $request->distance_uztracking,
        ]);

        $overall = ($request->price1 + $request->price2 + $request->price3 + $request->price4)/4 ;


        if(Rating::where('driver_id', $id)->first())
        {
            Rating::where('driver_id', $id)->first()->update([
                'driver_id' => $id,
                'price1' => $request->price1,
                'price2' => $request->price2,
                'price3' => $request->price3,
                'price4' => $request->price4,
                'overall' => $overall,
            
            ]);
        }
            
        else
        {
            Rating::create([
                'driver_id' => $id,
                'price1' => $request->price1,
                'price2' => $request->price2,
                'price3' => $request->price3,
                'price4' => $request->price4,
                'overall' => $overall,
            
            ]);
        }
            

        return redirect('admin/drivers')->with('success', 'Saqlandi.');
    }

    public function destroy(Driver $driver)
    {
        $driver->delete();
        
        return redirect('admin/drivers')->with('success', 'Driver deleted successfully.');
    }
}