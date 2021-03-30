<?php

namespace App\Http\Controllers;

use App\ServicioContratado;
use App\Cliente;
use App\Servicio;
use App\Subservicio;
use DB;

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

      $servicioscontratados = DB::select(
        DB::raw("SELECT
        servicioscontratados.id_serviciocontratado,
        servicioscontratados.quote,
        servicioscontratados.cliente__serviciocontratado,
        servicioscontratados.servicio_serviciocontratado,
        servicioscontratados.sub_servicio_serviciocontratado,
        servicioscontratados.servicio_detalle,
        servicioscontratados.alerta_serviciocontratado,
        servicioscontratados.vencimiento_serviciocontratado,
        servicioscontratados.observciones_serviciocontratado,
        servicioscontratados.alertacliente_serviciocontratado,
        servicioscontratados.alertami_serviciocontratado,
        servicioscontratados.cotizacion_serviciocontratado,
        servicioscontratados.cotizacion_aprobado,
        servicioscontratados.updated_at,
        servicioscontratados.created_at,
        clientes.razonsocial_cliente,
        servicios.nombre_servicio,
        subservicios.nombre_subservicio,
        quotes.paymentform1,
        quotes.paymentform2,
        quotes.paymentform3,
        servicioscontratados.serviciocontratado_pago1,
        servicioscontratados.serviciocontratado_pago2,
        servicioscontratados.serviciocontratado_pago3,
        servicioscontratados.facturanumero,
        servicioscontratados.fechafactura
        FROM
        servicioscontratados
        LEFT JOIN clientes ON servicioscontratados.cliente__serviciocontratado = clientes.id_cliente
        LEFT JOIN servicios ON servicioscontratados.servicio_serviciocontratado = servicios.id_servicio
        LEFT JOIN subservicios ON servicioscontratados.sub_servicio_serviciocontratado = subservicios.id_subservicio
        LEFT JOIN quotes ON servicioscontratados.quote = quotes.id
        WHERE
        servicioscontratados.cotizacion_aprobado = 1
        "));

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
        'sub_servicio_serviciocontratado' => request('subservicio'),
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
          'servicioscontratados.servicio_detalle',
          'servicioscontratados.sub_servicio_serviciocontratado',
          'servicioscontratados.alerta_serviciocontratado',
          'servicioscontratados.vencimiento_serviciocontratado',
          'servicioscontratados.observciones_serviciocontratado',
          'servicioscontratados.alertacliente_serviciocontratado',
          'servicioscontratados.alertami_serviciocontratado',
          'servicioscontratados.cotizacion_serviciocontratado',
          'servicioscontratados.fechafactura',
          'servicioscontratados.facturanumero',
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

         // return $servicioscontratados[0]['servicio_serviciocontratado'];

        $idsubservice =  $servicioscontratados[0]['sub_servicio_serviciocontratado'];
        if($idsubservice){
          $serviciospadreget = Subservicio::where('id_subservicio', '=', $idsubservice)->get();
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
          $serviciospadreget = $servicioscontratados[0]['servicio_serviciocontratado'];
          $idservicepadre =  $servicioscontratados[0]['servicio_serviciocontratado'];
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
      $quotenumber = $servicioscontratados->quote;
      $facturanumero = request('facturanumero');
      $facturafecha = request('fechafactura');

      $updateservicedata = DB::select(
        DB::raw("
          UPDATE servicioscontratados
          SET facturanumero = '$facturanumero', fechafactura=' $facturafecha'
          WHERE quote = $quotenumber;
      "));

      $updatequotedata = DB::select(
        DB::raw("
          UPDATE quotes
          SET facturanumero = '$facturanumero', fechafactura=' $facturafecha'
          WHERE id = $quotenumber;
      "));


      $servicioscontratados->update([
        'cliente__serviciocontratado' => request('cliente'),
        'servicio_serviciocontratado' => request('servicio'),
        'sub_servicio_serviciocontratado' => request('subservicio'),
        'servicio_detalle' => request('servicio_detalle'),
        'alerta_serviciocontratado' => request('alerta'),
        'vencimiento_serviciocontratado' => request('vencimiento'),
        'observciones_serviciocontratado' => request('observaciones'),
        'alertacliente_serviciocontratado' => request('alertarme'),
        'cotizacion_serviciocontratado' => request('cotizacion'),
        'alertami_serviciocontratado' => request('alertar'),
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
