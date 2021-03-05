<?php

namespace App\Http\Controllers;

use App\Nota;
use App\ServicioContratado;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recordatorios = Nota::select('*')
        ->Join('clientes', 'notas.cliente_nota', '=', 'clientes.id_cliente')
        ->where('notas.recordar_nota', '>' , now())
        ->orderBy('id_nota', 'desc')
        ->get()
        ->toArray();

        $alertas = ServicioContratado::select(
          'servicioscontratados.id_serviciocontratado',
          'servicioscontratados.cliente__serviciocontratado',
          'servicioscontratados.servicio_serviciocontratado',
          'servicioscontratados.alerta_serviciocontratado',
          'servicioscontratados.vencimiento_serviciocontratado',
          'servicioscontratados.observciones_serviciocontratado',
          'clientes.razonsocial_cliente',
          'subservicios.nombre_subservicio'
          )
        ->leftJoin('clientes', 'servicioscontratados.cliente__serviciocontratado', '=', 'clientes.id_cliente')
        ->leftJoin('subservicios', 'servicioscontratados.servicio_serviciocontratado', '=', 'subservicios.id_subservicio')
        ->where('servicioscontratados.alerta_serviciocontratado', '>' , now())
        ->orderBy('servicioscontratados.id_serviciocontratado', 'desc')
        ->get()
        ->toArray();

        $vencimientos = ServicioContratado::select(
          'servicioscontratados.id_serviciocontratado',
          'servicioscontratados.cliente__serviciocontratado',
          'servicioscontratados.servicio_serviciocontratado',
          'servicioscontratados.alerta_serviciocontratado',
          'servicioscontratados.vencimiento_serviciocontratado',
          'servicioscontratados.observciones_serviciocontratado',
          'clientes.razonsocial_cliente',
          'subservicios.nombre_subservicio'
          )
        ->leftJoin('clientes', 'servicioscontratados.cliente__serviciocontratado', '=', 'clientes.id_cliente')
        ->leftJoin('subservicios', 'servicioscontratados.servicio_serviciocontratado', '=', 'subservicios.id_subservicio')
        ->where('servicioscontratados.vencimiento_serviciocontratado', '>' , now())
        ->orderBy('servicioscontratados.id_serviciocontratado', 'desc')
        ->get()
        ->toArray();




        return view('agenda.index', compact('recordatorios','alertas','vencimientos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
