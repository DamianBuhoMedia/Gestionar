<?php

namespace App\Http\Controllers;

use App\Servicio;
use App\Subservicio;
use Illuminate\Http\Request;

class SubservicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function getsubservicio($id){


       return Subservicio::where('idpadre_subservicio','=',$id)->get();
      }



    public function index()
    {

      $join = Subservicio::select(
        'subservicios.id_subservicio',
        'subservicios.idpadre_subservicio',
        'subservicios.nombre_subservicio',
        'subservicios.precio_subservicio',
        'servicios.nombre_servicio'
        )
      ->Join('servicios', 'subservicios.idpadre_subservicio', '=', 'servicios.id_servicio')
      ->get()
      ->toArray();

        return view('subservicios.index', compact('join'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $servicios = Servicio::get();
        return view('subservicios.create', compact('servicios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          Subservicio::create([
            'nombre_subservicio' =>  request('nombre'),
            'precio_subservicio' =>  request('price'),
            'idpadre_subservicio' =>  request('servicio')
          ]);

          return redirect()->route('subservicios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

      $join = Subservicio::select(
        'subservicios.id_subservicio',
        'subservicios.idpadre_subservicio',
        'subservicios.nombre_subservicio',
        'subservicios.precio_subservicio',
        'servicios.nombre_servicio'
        )
      ->rightJoin('servicios', 'subservicios.idpadre_subservicio', '=', 'servicios.id_servicio')
      ->where('subservicios.id_subservicio', '=' , $id)
      ->get()
      ->toArray();

      $servicios = Servicio::get();
      return view('subservicios.edit', compact('servicios','join'));
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
        $subservicio = Subservicio::findorfail($id);
        $subservicio->update([
        'nombre_subservicio' =>  request('nombre'),
        'precio_subservicio' =>  request('price'),
        'idpadre_subservicio' =>  request('servicio')
      ]);

      return redirect()->route('subservicios.edit', $subservicio);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $subservicio = Subservicio::findorfail($id);
      $subservicio->delete();

      return redirect()->route('subservicios.index');
    }
}
