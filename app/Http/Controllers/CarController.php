<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;
use App\Models\Car;
use App\Models\Carfeatures;
use App\Models\Carphoto;
use App\Models\Category;
use Illuminate\Http\Client\Request;

class CarController extends Controller
{
    public function index()
    {
        return view('dashboard.fleets.index'  , ['cars' => Car::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('dashboard.fleets.create' , ['categories' => Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCarRequest $request)
    {
        $car = new Car() ;
        $car->name = $request->name;
        $car->category_id = $request->category;
        $car->description=$request->description;
        if ($car->save()) {
            for ($i = 0; $i < count($request->photos); $i++) {
                $image = $request->photos[$i];
                $new_image = time() . $image->getClientOriginalName();
                $image->move('images/cars/', $new_image);
                $carPhoto= new Carphoto();
                $carPhoto->car_id = $car->id;
                $carPhoto->photo = 'images/cars/' . $new_image;
                $carPhoto->save();
            }
        }
        return redirect('fleets');
    }
    public function show(Car $car)
    {
        return View('fleets.show' , ['car' =>$car]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        return view('dashboard.fleets.edit' , ['car' => $car , 'categories' =>Category::all()]);
    }
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->back();
    }
    public function fleets(){
        return View('front.fleets' , ['cars' => Car::all() , 'categories' => Category::all()]);
    }
   
}
