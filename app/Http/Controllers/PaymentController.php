<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Payments;
use App\Quotes;

class PaymentController extends Controller
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
    public function create($id,$etapa)
    {
      $servicioscontratados = DB::select(
        DB::raw("SELECT
        servicioscontratados.id_serviciocontratado,
        servicioscontratados.cliente__serviciocontratado,
        servicioscontratados.cotizacion_serviciocontratado,
        clientes.razonsocial_cliente,
        quotes.empresa
        FROM
        servicioscontratados
        LEFT JOIN clientes ON servicioscontratados.cliente__serviciocontratado = clientes.id_cliente
        LEFT JOIN quotes ON servicioscontratados.quote = quotes.id
        WHERE
        servicioscontratados.id_serviciocontratado = $id
        "));
        return view('payment.create', compact(
          'servicioscontratados',
          'etapa',
          'id'
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
      $quoteid = request('idservicio');
      $etapa = request('step');
      $color = request('color_factura');

      Payments::create([
        'servicio_id'  => request('servicio_id'),
        'fecha_factura'  => request('fecha_factura'),
        'numero_factura'  => request('numero_factura'),
        'cliente_factura'  => request('cliente_factura'),
        'monto_factura'  => request('monto_factura'),
        'empresa_factura'  => request('empresa_factura'),
        'step_factura' => $etapa,
        'color_factura'  => request('color_factura')
      ]);


      if ($etapa == "1") {
        $updatequote = DB::select(
          DB::raw("
          UPDATE servicioscontratados
          SET serviciocontratado_pago1 = $color
          WHERE id_serviciocontratado = $quoteid;
          "));
      }

      if ($etapa == "2") {
        $updatequote = DB::select(
          DB::raw("
          UPDATE servicioscontratados
          SET serviciocontratado_pago2 = $color
          WHERE id_serviciocontratado = $quoteid;
          "));
      }

      if ($etapa == "3") {
        $updatequote = DB::select(
          DB::raw("
          UPDATE servicioscontratados
          SET serviciocontratado_pago3 = $color
          WHERE id_serviciocontratado = $quoteid;
          "));
      }
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
     public function edit($id,$etapa)
     {
       $servicioscontratados = DB::select(
         DB::raw("SELECT
          payments.id,
          payments.servicio_id,
          payments.fecha_factura,
          payments.numero_factura,
          payments.monto_factura,
          payments.empresa_factura,
          payments.cliente_factura,
          payments.step_factura,
          payments.color_factura,
          payments.created_at,
          payments.updated_at,
          clientes.razonsocial_cliente
          FROM
          payments
          LEFT JOIN clientes ON payments.cliente_factura = clientes.id_cliente
          WHERE
          payments.servicio_id = $id AND payments.step_factura = $etapa
           "));
         return view('payment.edit', compact(
           'servicioscontratados',
           'etapa',
           'id'
         ));
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $etapa)
    {
      $color = request('color_factura');
      $paymentid = request('id');

      $updatepayment = DB::select(
        DB::raw("
        UPDATE payments
        SET color_factura = $color
        WHERE id = $paymentid;
      "));

        if ($etapa == "1") {
          $updatequote = DB::select(
            DB::raw("
            UPDATE servicioscontratados
            SET serviciocontratado_pago1 = $color
            WHERE id_serviciocontratado = $id;
            "));
        }

        if ($etapa == "2") {
          $updatequote = DB::select(
            DB::raw("
            UPDATE servicioscontratados
            SET serviciocontratado_pago2 = $color
            WHERE id_serviciocontratado = $id;
            "));
        }

        if ($etapa == "3") {
          $updatequote = DB::select(
            DB::raw("
            UPDATE servicioscontratados
            SET serviciocontratado_pago3 = $color
            WHERE id_serviciocontratado = $id;
            "));
        }

        return redirect()->route('servicioscontratados.index');
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
