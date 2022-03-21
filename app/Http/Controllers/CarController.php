<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
        return view( "list_cars", [
            "cars" => $cars
        ] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view( "new_car" );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Car::create( $request->all() );
        return redirect( "/" );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $cars = Car::where( "color", $request->color )->get();

        // foreach( $cars as $car ) {

        //     echo $car->brand;
        // }
        // echo "<pre>";
        // print_r( $car[0]->brand );
        return view( "show_car", [
            "cars" => $cars
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit( $id )
    {
        $car = Car::find( $id );

        return view( "edit_car", [
            "car" => $car
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request )
    {
        
        $car = Car::find( $request->id );
        $car->update( $request->all() );
        
        return redirect( "/" );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id )
    {
        Car::destroy( $id );
        // $car = Car::find( $id );
        // $car->delete();

        return redirect( "/" );
    }
}
