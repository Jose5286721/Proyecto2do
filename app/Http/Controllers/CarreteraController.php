<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carretera;
use Validator;

class CarreteraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carreteras = Carretera::all();
        return view("carreteras.index",array("carreteras"=>$carreteras));
    }

    public function indexApi(){
        return Carretera::all();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('carreteras.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(),[
            "nombre" => ["required","string"],
            "categoria" => ["required","string"]
        ])->validate();
        Carretera::create($request->all());
        return redirect()->route("carreteras.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carretera = Carretera::findOrFail($id);
        return view("carreteras.update",array("carretera"=>$carretera));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Validator::make($request->all(),[
            "nombre" => ["required","string"],
            "categoria" => ["required","string"]
        ])->validate();
        $carretera = Carretera::findOrFail($id);
        $carretera->fill($request->all());
        $carretera->save();
        return redirect()->route("carreteras.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carretera = Carretera::findOrFail($id);
        $carretera->delete();
        return redirect()->route("carreteras.index");
    }
}
