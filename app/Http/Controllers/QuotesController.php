<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServicioContratado;
use App\Cliente;
use App\Servicio;
use App\Subservicio;
use App\Quotes;
use DB;
use App\Potencial;
use App\TramitesNacion ;

class QuotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $quotes = DB::select(
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
        quotes.facturado = 0
        "));

      return view('quotes.index',compact(
          'quotes'
        ));
    }


    public function indexapproved()
    {
      $quotes = DB::select(
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
        quotes.facturado = 1
        "));

      return view('quotes.indexapproved',compact(
          'quotes'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $serviciocontratado = ServicioContratado::select(
        //   'servicioscontratados.id_serviciocontratado',
        //   'servicioscontratados.cliente__serviciocontratado',
        //   'servicioscontratados.servicio_serviciocontratado',
        //   'servicioscontratados.sub_servicio_serviciocontratado',
        //   'servicioscontratados.alerta_serviciocontratado',
        //   'servicioscontratados.vencimiento_serviciocontratado',
        //   'servicioscontratados.observciones_serviciocontratado',
        //   'servicioscontratados.alertacliente_serviciocontratado',
        //   'servicioscontratados.alertami_serviciocontratado',
        //   'servicioscontratados.cotizacion_serviciocontratado',
        //   'clientes.razonsocial_cliente',
        //   'subservicios.nombre_subservicio',
        //   'servicios.nombre_servicio'
        // )
        // ->leftJoin('clientes', 'servicioscontratados.cliente__serviciocontratado', '=', 'clientes.id_cliente')
        // ->leftJoin('subservicios', 'servicioscontratados.sub_servicio_serviciocontratado', '=', 'subservicios.id_subservicio')
        // ->leftJoin('servicios', 'servicioscontratados.servicio_serviciocontratado', '=', 'servicios.id_servicio')
        // ->where('servicioscontratados.id_serviciocontratado', '=' , $id)
        // ->get()
        // ->toArray();
        $clientes = Cliente::select('*')
        // ->where('clientes.potencial_cliente', '=' , '0')
        ->get()
        ->toArray();
        $serviciosPadre = Servicio::get();
        $servicios = Subservicio::get();
        return view('quotes.create', compact('clientes','servicios','serviciosPadre'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Quotes::create([
        'clientid' => request('cliente'),
        'amount' => request('cotizacion'),
        'cotizacion_serviciocontratado' => request('cotizacion'),
        'paymentcondition' => request('paymentcondition'),
        'empresa' => request('empresa'),
        'banco' => request('banco'),
        'paymentform1' => request('paymentform1'),
        'paymentform2' => request('paymentform2'),
        'paymentform3' => request('paymentform3'),
        'observation' => request('observation'),
        'facturado' => "0",
      ]);

        $lastquote = Quotes::orderby('id','desc')->take(1)->get();
        $lastquoteid = $lastquote[0]->id;



      if(!is_null(request('servicio'))){
        ServicioContratado::create([
          'quote' => $lastquoteid,
          'servicio_cantidad' => request('cantidad1'),
          'cliente__serviciocontratado' => request('cliente'),
          'servicio_serviciocontratado' => request('servicio'),
          'servicio_detalle' => request('servicio_detalle'),
          'sub_servicio_serviciocontratado' => request('subservicio'),
          'cotizacion_serviciocontratado' => request('cotizacion'),
          'cotizacion_aprobado' => "0",
          'serviciocontratado_pago1' => "0",
          'serviciocontratado_pago2' => "0",
          'serviciocontratado_pago3' => "0",
        ]);
      }

      if(!is_null(request('servicio2'))){
        ServicioContratado::create([
          'quote' => $lastquoteid,
          'servicio_cantidad' => request('cantidad2'),
          'cliente__serviciocontratado' => request('cliente'),
          'servicio_serviciocontratado' => request('servicio2'),
          'servicio_detalle' => request('servicio_detalle2'),
          'sub_servicio_serviciocontratado' => request('subservicio2'),
          'cotizacion_serviciocontratado' => request('cotizacion2'),
          'cotizacion_aprobado' => "0",
          'serviciocontratado_pago1' => "0",
          'serviciocontratado_pago2' => "0",
          'serviciocontratado_pago3' => "0",
        ]);
      }

      if(!is_null(request('servicio3'))){
        ServicioContratado::create([
          'quote' => $lastquoteid,
          'servicio_cantidad' => request('cantidad3'),
          'cliente__serviciocontratado' => request('cliente'),
          'servicio_serviciocontratado' => request('servicio3'),
          'servicio_detalle' => request('servicio_detalle3'),
          'sub_servicio_serviciocontratado' => request('subservicio3'),
          'cotizacion_serviciocontratado' => request('cotizacion3'),
          'cotizacion_aprobado' => "0",
          'serviciocontratado_pago1' => "0",
          'serviciocontratado_pago2' => "0",
          'serviciocontratado_pago3' => "0",
        ]);
      }

      if(!is_null(request('servicio4'))){
        ServicioContratado::create([
          'quote' => $lastquoteid,
          'servicio_cantidad' => request('cantidad4'),
          'cliente__serviciocontratado' => request('cliente'),
          'servicio_serviciocontratado' => request('servicio4'),
          'servicio_detalle' => request('servicio_detalle4'),
          'sub_servicio_serviciocontratado' => request('subservicio4'),
          'cotizacion_serviciocontratado' => request('cotizacion4'),
          'cotizacion_aprobado' => "0",
          'serviciocontratado_pago1' => "0",
          'serviciocontratado_pago2' => "0",
          'serviciocontratado_pago3' => "0",
        ]);
      }

      if(!is_null(request('servicio5'))){
        ServicioContratado::create([
          'quote' => $lastquoteid,
          'servicio_cantidad' => request('cantidad5'),
          'cliente__serviciocontratado' => request('cliente'),
          'servicio_serviciocontratado' => request('servicio5'),
          'servicio_detalle' => request('servicio_detalle5'),
          'sub_servicio_serviciocontratado' => request('subservicio5'),
          'cotizacion_serviciocontratado' => request('cotizacion5'),
          'cotizacion_aprobado' => "0",
          'serviciocontratado_pago1' => "0",
          'serviciocontratado_pago2' => "0",
          'serviciocontratado_pago3' => "0",
        ]);
      }

      if(!is_null(request('servicio6'))){
        ServicioContratado::create([
          'quote' => $lastquoteid,
          'servicio_cantidad' => request('cantidad6'),
          'cliente__serviciocontratado' => request('cliente'),
          'servicio_serviciocontratado' => request('servicio6'),
          'sub_servicio_serviciocontratado' => request('subservicio6'),
          'servicio_detalle' => request('servicio_detalle6'),
          'cotizacion_serviciocontratado' => request('cotizacion6'),
          'cotizacion_aprobado' => "0",
          'serviciocontratado_pago1' => "0",
          'serviciocontratado_pago2' => "0",
          'serviciocontratado_pago3' => "0",
        ]);
      }

      if(!is_null(request('servicio7'))){
        ServicioContratado::create([
          'quote' => $lastquoteid,
          'servicio_cantidad' => request('cantidad7'),
          'cliente__serviciocontratado' => request('cliente'),
          'servicio_serviciocontratado' => request('servicio7'),
          'sub_servicio_serviciocontratado' => request('subservicio7'),
          'servicio_detalle' => request('servicio_detalle7'),
          'cotizacion_serviciocontratado' => request('cotizacion7'),
          'cotizacion_aprobado' => "0",
          'serviciocontratado_pago1' => "0",
          'serviciocontratado_pago2' => "0",
          'serviciocontratado_pago3' => "0",
        ]);
      }

      if(!is_null(request('servicio8'))){
        ServicioContratado::create([
          'quote' => $lastquoteid,
          'servicio_cantidad' => request('cantidad8'),
          'cliente__serviciocontratado' => request('cliente'),
          'servicio_serviciocontratado' => request('servicio8'),
          'sub_servicio_serviciocontratado' => request('subservicio8'),
          'servicio_detalle' => request('servicio_detalle8'),
          'cotizacion_serviciocontratado' => request('cotizacion8'),
          'cotizacion_aprobado' => "0",
          'serviciocontratado_pago1' => "0",
          'serviciocontratado_pago2' => "0",
          'serviciocontratado_pago3' => "0",
        ]);
      }

      if(!is_null(request('servicio9'))){
        ServicioContratado::create([
          'quote' => $lastquoteid,
          'servicio_cantidad' => request('cantidad9'),
          'cliente__serviciocontratado' => request('cliente'),
          'servicio_serviciocontratado' => request('servicio9'),
          'sub_servicio_serviciocontratado' => request('subservicio9'),
          'servicio_detalle' => request('servicio_detalle9'),
          'cotizacion_serviciocontratado' => request('cotizacion9'),
          'cotizacion_aprobado' => "0",
          'serviciocontratado_pago1' => "0",
          'serviciocontratado_pago2' => "0",
          'serviciocontratado_pago3' => "0",
        ]);
      }

      if(!is_null(request('servicio10'))){
        ServicioContratado::create([
          'quote' => $lastquoteid,
          'servicio_cantidad' => request('cantidad10'),
          'cliente__serviciocontratado' => request('cliente'),
          'servicio_serviciocontratado' => request('servicio10'),
          'sub_servicio_serviciocontratado' => request('subservicio10'),
          'servicio_detalle' => request('servicio_detalle10'),
          'cotizacion_serviciocontratado' => request('cotizacion10'),
          'cotizacion_aprobado' => "0",
          'serviciocontratado_pago1' => "0",
          'serviciocontratado_pago2' => "0",
          'serviciocontratado_pago3' => "0",
        ]);
      }

      return redirect()->route('quote.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
            servicioscontratados.servicio_detalle,
            servicios.nombre_servicio,
            subservicios.nombre_subservicio,
            servicioscontratados.cotizacion_serviciocontratado,
            servicioscontratados.servicio_cantidad
            FROM
            servicioscontratados
            LEFT JOIN servicios ON servicioscontratados.servicio_serviciocontratado = servicios.id_servicio
            LEFT JOIN subservicios ON servicioscontratados.sub_servicio_serviciocontratado = subservicios.id_subservicio
            WHERE
            servicioscontratados.quote = $id
          "));


      $serviciosPadre = Servicio::get();
      $servicios = Subservicio::get();
      return view('quotes.show', compact('quote','servicios','serviciosPadre','itemquotes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
            servicioscontratados.servicio_detalle,
            servicioscontratados.servicio_cantidad,
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



      $serviciosPadre = Servicio::get();
      $servicios = Subservicio::get();
      return view('quotes.edit', compact('quote','servicios','serviciosPadre','itemquotes'));
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
      {
          $updatequote = Quotes::findorfail($id);
          $updatequote->update([
          'paymentcondition' => request('paymentcondition'),
          'empresa' => request('empresa'),
          'banco' => request('banco'),
          'paymentform1' => request('paymentform1'),
          'paymentform2' => request('paymentform2'),
          'paymentform3' => request('paymentform3'),
          'observation' => request('observation'),
        ]);

        $deleteitems = DB::select(
          DB::raw("DELETE FROM servicioscontratados
            WHERE
            servicioscontratados.quote = $id;
          "));


        if(!is_null(request('servicio'))){
          ServicioContratado::create([
            'quote' => $id,
            'cliente__serviciocontratado' => request('cliente'),
            'servicio_cantidad' => request('cantidad1'),
            'servicio_serviciocontratado' => request('servicio'),
            'sub_servicio_serviciocontratado' => request('subservicio'),
            'sub_servicio_serviciocontratado' => request('servicio_detalle'),
            'cotizacion_serviciocontratado' => request('cotizacion'),
            'cotizacion_aprobado' => "0",
          ]);
        }

        if(!is_null(request('servicio2'))){
          ServicioContratado::create([
            'quote' => $id,
            'cliente__serviciocontratado' => request('cliente'),
            'servicio_serviciocontratado' => request('servicio2'),
            'servicio_cantidad' => request('cantidad2'),
            'sub_servicio_serviciocontratado' => request('subservicio2'),
            'sub_servicio_serviciocontratado' => request('servicio_detalle2'),
            'cotizacion_serviciocontratado' => request('cotizacion2'),
            'cotizacion_aprobado' => "0",
          ]);
        }

        if(!is_null(request('servicio3'))){
          ServicioContratado::create([
            'quote' => $id,
            'cliente__serviciocontratado' => request('cliente'),
            'servicio_serviciocontratado' => request('servicio3'),
            'servicio_cantidad' => request('cantidad3'),
            'sub_servicio_serviciocontratado' => request('subservicio3'),
            'sub_servicio_serviciocontratado' => request('servicio_detalle3'),
            'cotizacion_serviciocontratado' => request('cotizacion3'),
            'cotizacion_aprobado' => "0",
          ]);
        }

        if(!is_null(request('servicio4'))){
          ServicioContratado::create([
            'quote' => $id,
            'cliente__serviciocontratado' => request('cliente'),
            'servicio_serviciocontratado' => request('servicio4'),
            'servicio_cantidad' => request('cantidad4'),
            'sub_servicio_serviciocontratado' => request('subservicio4'),
            'sub_servicio_serviciocontratado' => request('servicio_detalle4'),
            'cotizacion_serviciocontratado' => request('cotizacion4'),
            'cotizacion_aprobado' => "0",
          ]);
        }

        if(!is_null(request('servicio5'))){
          ServicioContratado::create([
            'quote' => $id,
            'cliente__serviciocontratado' => request('cliente'),
            'servicio_serviciocontratado' => request('servicio5'),
            'servicio_cantidad' => request('cantidad5'),
            'sub_servicio_serviciocontratado' => request('subservicio5'),
            'sub_servicio_serviciocontratado' => request('servicio_detalle5'),
            'cotizacion_serviciocontratado' => request('cotizacion5'),
            'cotizacion_aprobado' => "0",
          ]);
        }

        if(!is_null(request('servicio6'))){
          ServicioContratado::create([
            'quote' => $id,
            'cliente__serviciocontratado' => request('cliente'),
            'servicio_serviciocontratado' => request('servicio6'),
            'servicio_cantidad' => request('cantidad6'),
            'sub_servicio_serviciocontratado' => request('subservicio6'),
            'sub_servicio_serviciocontratado' => request('servicio_detalle6'),
            'cotizacion_serviciocontratado' => request('cotizacion6'),
            'cotizacion_aprobado' => "0",
          ]);
        }

        if(!is_null(request('servicio7'))){
          ServicioContratado::create([
            'quote' => $id,
            'cliente__serviciocontratado' => request('cliente'),
            'servicio_serviciocontratado' => request('servicio7'),
            'servicio_cantidad' => request('cantidad7'),
            'sub_servicio_serviciocontratado' => request('subservicio7'),
            'sub_servicio_serviciocontratado' => request('servicio_detalle7'),
            'cotizacion_serviciocontratado' => request('cotizacion7'),
            'cotizacion_aprobado' => "0",
          ]);
        }

        if(!is_null(request('servicio8'))){
          ServicioContratado::create([
            'quote' => $id,
            'cliente__serviciocontratado' => request('cliente'),
            'servicio_serviciocontratado' => request('servicio8'),
            'servicio_cantidad' => request('cantidad8'),
            'sub_servicio_serviciocontratado' => request('subservicio8'),
            'sub_servicio_serviciocontratado' => request('servicio_detalle8'),
            'cotizacion_serviciocontratado' => request('cotizacion8'),
            'cotizacion_aprobado' => "0",
          ]);
        }

        if(!is_null(request('servicio9'))){
          ServicioContratado::create([
            'quote' => $id,
            'cliente__serviciocontratado' => request('cliente'),
            'servicio_serviciocontratado' => request('servicio9'),
            'servicio_cantidad' => request('cantidad9'),
            'sub_servicio_serviciocontratado' => request('subservicio9'),
            'sub_servicio_serviciocontratado' => request('servicio_detalle9'),
            'cotizacion_serviciocontratado' => request('cotizacion9'),
            'cotizacion_aprobado' => "0",
          ]);
        }

        if(!is_null(request('servicio10'))){
          ServicioContratado::create([
            'quote' => $id,
            'cliente__serviciocontratado' => request('cliente'),
            'servicio_serviciocontratado' => request('servicio10'),
            'servicio_cantidad' => request('cantidad10'),
            'sub_servicio_serviciocontratado' => request('subservicio10'),
            'sub_servicio_serviciocontratado' => request('servicio_detalle10'),
            'cotizacion_serviciocontratado' => request('cotizacion10'),
            'cotizacion_aprobado' => "0",
          ]);
        }



         return redirect()->back()->with('success', 'your message,here');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function createfc($id)
     {
       $factura = DB::select(
         DB::raw("
         UPDATE quotes
         SET facturado = '1'
         WHERE id = $id;
        "));

        $quote = DB::select(
          DB::raw("
          SELECT * FROM quotes
          WHERE id = $id;
         "));

         $creaservicio = DB::select(
           DB::raw("UPDATE servicioscontratados
            SET cotizacion_aprobado = '1'
            WHERE quote = $id;
          "));


        $idcliente = $quote[0]->clientid;
        $cliente = DB::select(
          DB::raw("
          SELECT * FROM clientes
          WHERE id_cliente = $idcliente;
         "));


         if($cliente[0]->potencial_cliente == "1"){
           $convierte = DB::select(
             DB::raw("
             UPDATE clientes
             SET potencial_cliente = '0'
             WHERE id_cliente = $idcliente;
            "));
         }


         TramitesNacion::create([
           'quote' => $id
         ]);


        return redirect()->route('servicioscontratados.index');

     }

    public function destroy($id)
    {
        //
    }
}
