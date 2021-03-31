<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function printquote($id)
    {
      $quote = DB::select(
        DB::raw("SELECT
        quotes.id,
        quotes.serviceid,
        quotes.subserviceid,
        quotes.clientid,
        quotes.amount,
        quotes.observation,
        quotes.empresa,
        quotes.banco,
        quotes.paymentcondition,
        quotes.paymentform1,
        quotes.paymentform2,
        quotes.paymentform3,
        quotes.created_at,
        quotes.updated_at,
        clientes.razonsocial_cliente,
        servicios.nombre_servicio,
        subservicios.nombre_subservicio
        FROM
        quotes
        LEFT JOIN clientes ON quotes.clientid = clientes.id_cliente
        LEFT JOIN servicios ON quotes.serviceid = servicios.id_servicio
        LEFT JOIN subservicios ON quotes.subserviceid = subservicios.id_subservicio
        WHERE
        quotes.id = $id
        "));


      $itemquotes = DB::select(
        DB::raw("SELECT
          servicioscontratados.id_serviciocontratado,
          servicioscontratados.quote,
          servicioscontratados.servicio_serviciocontratado,
          servicioscontratados.sub_servicio_serviciocontratado,
          servicios.nombre_servicio,
          subservicios.nombre_subservicio,
          servicioscontratados.cotizacion_serviciocontratado
          FROM
          servicioscontratados
          LEFT JOIN servicios ON servicioscontratados.servicio_serviciocontratado = servicios.id_servicio
          LEFT JOIN subservicios ON servicioscontratados.sub_servicio_serviciocontratado = subservicios.id_subservicio
          WHERE
          servicioscontratados.quote = $id
        "));

        $filename = "presupuesto-".$id.".pdf";
        $data = compact('itemquotes', 'quote');
        $pdf = PDF::loadView('pdfs.quote', $data);

        return $pdf->stream($filename);
        return $pdf->download($filename);
    }

}
