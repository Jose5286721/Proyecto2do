<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Comunidad;

class ComunidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comunidades = Comunidad::all();
        return view("comunidades.index",array("comunidades"=>$comunidades));
    }

    public function indexApi(){
        return Comunidad::all();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("comunidades.create");
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
        ])->validate();
        Comunidad::create($request->all());
        return redirect()->route("comunidades.index");
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
        $comunidad = Comunidad::findOrFail($id);
        return view("comunidades.update",array("comunidad"=>$comunidad));
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
        ])->validate();
        $comunidad = Comunidad::findOrFail($id);
        $comunidad->fill($request->all());
        $comunidad->save();
        return redirect()->route("comunidades.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comunidad = Comunidad::findOrFail($id);
        $comunidad->delete();
        return redirect()->route("comunidades.index");
    }
}
