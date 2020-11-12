<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function getAllCars() {
        
        $cars =  Car::orderBy('id','DESC')->get();

        return view("cars-page",)->with("cars",$cars);

    }

    public function createNewCar(Request $request) {

        Car::create([
            'name' => $request->name,
            'make' => $request->make,
            'model' => $request->model,
            'license_number' => $request->license_number,
            'weight' => $request->weight,
            'registration_year' => $request->registration_year
        ]);
        

        return redirect(route("cars.all"));

    }

    public function editCar(Request $request, $id) {

        $carToEdit = Car::where('id',$id)->firstOrFail();

        return view("edit-car")->with("carToEdit",$carToEdit);

    }

    public function updateCar(Request $request) {

        Car::where("id",$request->id)->update([
            'name' => $request->name,
            'make' => $request->make,
            'model' => $request->model,
            'license_number' => $request->license_number,
            'weight' => $request->weight,
            'registration_year' => $request->registration_year
        ]);

        return redirect(route("cars.all"));

    }



}
