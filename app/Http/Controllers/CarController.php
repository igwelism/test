<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{

    public function retrieveCardDetails(Request $request)
    {
        if(in_array($request->get('transmission'), ['manual', 'automatic'])) {
            $this->transmission($request->get('transmission'));
        }
        return Car::where('color', $request->get('color'))->where('fuel', $request->get('fuel'))
            ->where('price', $request->get('price'))->get();
    }

    public function transmission($transmission)
    {
        return Car::where('transmission', $transmission)->first();
    }

//    public function place(Request $request)
//    {
//        return Car::where('license_plate', $request->get('license_plate'))->get();
//    }
}
