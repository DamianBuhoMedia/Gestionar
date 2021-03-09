<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServicioContratado;

class FacturasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $serviciocontratado = ServicioContratado::select(
          'servicioscontratados.id_serviciocontratado',
          'servicioscontratados.cliente__serviciocontratado',
          'servicioscontratados.servicio_serviciocontratado',
          'servicioscontratados.sub_servicio_serviciocontratado',
          'servicioscontratados.alerta_serviciocontratado',
          'servicioscontratados.vencimiento_serviciocontratado',
          'servicioscontratados.observciones_serviciocontratado',
          'servicioscontratados.alertacliente_serviciocontratado',
          'servicioscontratados.alertami_serviciocontratado',
          'servicioscontratados.cotizacion_serviciocontratado',
          'clientes.razonsocial_cliente',
          'subservicios.nombre_subservicio',
          'servicios.nombre_servicio'
        )
        ->leftJoin('clientes', 'servicioscontratados.cliente__serviciocontratado', '=', 'clientes.id_cliente')
        ->leftJoin('subservicios', 'servicioscontratados.sub_servicio_serviciocontratado', '=', 'subservicios.id_subservicio')
        ->leftJoin('servicios', 'servicioscontratados.servicio_serviciocontratado', '=', 'servicios.id_servicio')
        ->where('servicioscontratados.id_serviciocontratado', '=' , $id)
        ->get()
        ->toArray();


        return view('facturas.create', compact(
          'serviciocontratado'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
