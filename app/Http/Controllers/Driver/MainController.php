<?php

namespace App\Http\Controllers\Driver;

use App\Http\Controllers\Controller;
use App\Models\Driver;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function dashboard(){
        
        $driver = Driver::find(Auth::user()->id);
        
        return view('driver.layouts.dashboard', compact('driver'));
    }

    public function edit($id){
        
        $driver = Driver::find($id);
        return view('driver.edit', compact('driver'));
    }

    public function rating(){
        $rating = Rating::where('driver_id', Auth::user()->id)->first();
        return view('driver.rating', compact('rating'));
    }

    public function update(Request $request, $id)
    {

        $requestData = $request->all();
           
        if(request()->hasFile('img'))
        {
            $this->unlink_file($id, 'img');
            $requestData['img'] = $this->upload_file('img');
        }

        if(request()->hasFile('pasport_copy'))
        {
            $this->unlink_file($id, 'pasport_copy');
            $requestData['pasport_copy'] = $this->upload_file('pasport_copy');
        }

        if(request()->hasFile('sertificate_copy'))
        {
            $this->unlink_file($id, 'sertificate_copy');
            $requestData['sertificate_copy'] = $this->upload_file('sertificate_copy');
        }

        if(request()->hasFile('workbook_copy'))
        {
            $this->unlink_file($id, 'workbook_copy');
            $requestData['workbook_copy'] = $this->upload_file('workbook_copy');
        }

        if(request()->hasFile('car_document'))
        {
            $this->unlink_file($id, 'car_document');
            $requestData['car_document'] = $this->upload_file('car_document');
        }


        Driver::find($id)->update($requestData);

        return redirect()->route('driver.dashboard');
    }

    public function upload_file($fname){
        
        $file = request()->file($fname);
        $fileName = time().'-'.$file->getClientOriginalName();
        $file->move('files/', $fileName);
        return $fileName;
        
    }

    public function unlink_file($id, $column_name){
        $driver = Driver::find($id);
        if(isset($driver->$column_name) && file_exists(public_path('/files/'.$driver->$column_name))){
            unlink(public_path('/files/'.$driver->$column_name));
        }
    }
}