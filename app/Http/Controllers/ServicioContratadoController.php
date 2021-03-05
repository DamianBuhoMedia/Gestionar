<?php

namespace App\Http\Controllers;

use App\ServicioContratado;
use App\Cliente;
use App\Servicio;
use App\Subservicio;

use Illuminate\Http\Request;

class ServicioContratadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $servicioscontratados = ServicioContratado::select(
        'servicioscontratados.id_serviciocontratado',
        'servicioscontratados.cliente__serviciocontratado',
        'servicioscontratados.servicio_serviciocontratado',
        'servicioscontratados.alerta_serviciocontratado',
        'servicioscontratados.vencimiento_serviciocontratado',
        'servicioscontratados.observciones_serviciocontratado',
        'clientes.razonsocial_cliente',
        'subservicios.nombre_subservicio',
        'servicioscontratados.alertacliente_serviciocontratado',
        'servicioscontratados.alertami_serviciocontratado',
        'servicioscontratados.created_at'
        )
        ->leftJoin('clientes', 'servicioscontratados.cliente__serviciocontratado', '=', 'clientes.id_cliente')
        ->leftJoin('subservicios', 'servicioscontratados.servicio_serviciocontratado', '=', 'subservicios.id_subservicio')
        ->get()
        ->toArray();
        return view('servicioscontratados.index', compact('servicioscontratados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $clientes = Cliente::select('*')
      ->where('clientes.potencial_cliente', '=' , '0')
      ->get()
      ->toArray();
      $serviciosPadre = Servicio::get();
      $servicios = Subservicio::get();
      return view('servicioscontratados.create', compact('clientes','servicios','serviciosPadre'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      ServicioContratado::create([
        'cliente__serviciocontratado' => request('cliente'),
        'servicio_serviciocontratado' => request('servicio'),
        'alerta_serviciocontratado' => request('alerta'),
        'vencimiento_serviciocontratado' => request('vencimiento'),
        'observciones_serviciocontratado' => request('observaciones'),
        'alertacliente_serviciocontratado' => request('alertarme'),
        'cotizacion_serviciocontratado' => request('cotizacion'),
        'alertami_serviciocontratado' => request('alertar'),
      ]);

      return redirect()->route('servicioscontratados.index');
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
        $servicioscontratados = ServicioContratado::select(
        'servicioscontratados.id_serviciocontratado',
        'servicioscontratados.cliente__serviciocontratado',
        'servicioscontratados.servicio_serviciocontratado',
        'servicioscontratados.alerta_serviciocontratado',
        'servicioscontratados.vencimiento_serviciocontratado',
        'servicioscontratados.observciones_serviciocontratado',
        'clientes.razonsocial_cliente',
        'servicioscontratados.alertacliente_serviciocontratado',
        'servicioscontratados.alertami_serviciocontratado',
        'subservicios.nombre_subservicio',
        'servicioscontratados.cotizacion_serviciocontratado'
        )
        ->leftJoin('clientes', 'servicioscontratados.cliente__serviciocontratado', '=', 'clientes.id_cliente')
        ->leftJoin('subservicios', 'servicioscontratados.servicio_serviciocontratado', '=', 'subservicios.id_subservicio')
        ->where('servicioscontratados.id_serviciocontratado', '=' , $id)
        ->get()
        ->toArray();

        // return $servicioscontratados;

        $idservice =  $servicioscontratados[0]['servicio_serviciocontratado'];
        if($idservice){
          $serviciospadreget = Subservicio::where('id_subservicio', '=', $idservice)->get();
          $idservicepadre =  $serviciospadreget[0]['idpadre_subservicio'];
          $servicepadre = Servicio::where('id_servicio', '=', $idservicepadre)->get();
          $clientes = Cliente::select('*')
          ->where('clientes.potencial_cliente', '=' , '0')
          ->get()
          ->toArray();
          $serviciosPadre = Servicio::get();
          $servicios = Subservicio::get();
          return view('servicioscontratados.edit', compact('clientes','servicios','servicioscontratados','serviciosPadre','servicepadre'));
        }
        else{
          $serviciospadreget = "3";
          $idservicepadre =  "3";
          $servicepadre = Servicio::where('id_servicio', '=', $idservicepadre)->get();
          $clientes = Cliente::select('*')
          ->where('clientes.potencial_cliente', '=' , '0')
          ->get()
          ->toArray();
          $serviciosPadre = Servicio::get();
          $servicios = Subservicio::get();
          return view('servicioscontratados.edit', compact('clientes','servicios','servicioscontratados','serviciosPadre','servicepadre'));
        }

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
      $servicioscontratados = ServicioContratado::findorfail($id);
      $servicioscontratados->update([
        'cliente__serviciocontratado' => request('cliente'),
        'servicio_serviciocontratado' => request('servicio'),
        'alerta_serviciocontratado' => request('alerta'),
        'vencimiento_serviciocontratado' => request('vencimiento'),
        'observciones_serviciocontratado' => request('observaciones'),
        'alertacliente_serviciocontratado' => request('alertarme'),
        'cotizacion_serviciocontratado' => request('cotizacion'),
        'alertami_serviciocontratado' => request('alertar')
      ]);

      return redirect()->route('servicioscontratados.edit', $servicioscontratados);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $servicioscontratados = ServicioContratado::findorfail($id);
      $servicioscontratados->delete();

      return redirect()->route('servicioscontratados.index');
    }
}
