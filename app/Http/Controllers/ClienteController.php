<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Productor;
use App\Iva;
use App\Iibb;
use App\Nota;
use App\ServicioContratado;
use DB;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::select('*')
        ->where('clientes.potencial_cliente', '=' , '0')
        ->get()
        ->toArray();

        return view('clientes.index' , compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productor = Productor::get();
        $iva = Iva::get();
        $iibb = Iibb::get();
        return view('clientes.create', compact('productor','iva','iibb'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Cliente::create([
          'razonsocial_cliente'=>request('razonsocial'),
          'cuit_cliente'=>request('cuit'),
          'direccion_cliente'=>request('direccion'),
          'calle_cliente'=>request('calle'),
          'numero_cliente'=>request('numero'),
          'piso_cliente'=>request('piso'),
          'oficina_cliente'=>request('oficina'),
          'localidad_cliente'=>request('localidad'),
          'cp_cliente'=>request('cp'),
          'provincia_cliente'=>request('provincia'),
          'telefono_cliente'=>request('telefono'),
          'fax_cliente'=>request('fax'),
          'mail_cliente'=>request('mailppal'),
          'mailsec_cliente'=>request('mailsec'),
          'productor_cliente'=>request('productor'),
          'observaciones_cliente'=>request('observaciones'),
          'actividad_cliente'=>request('actividad'),
          'iva_cliente'=>request('iva'),
          'iibb_cliente'=>request('iibb'),
          'c1cargo_cliente'=>request('c1cargo'),
          'c1telefono_cliente'=>request('c1telefono'),
          'c1celular_cliente'=>request('c1celular'),
          'c1mail_cliente'=>request('c1mail'),
          'c2cargo_cliente'=>request('c2cargo'),
          'c2telefono_cliente'=>request('c2telefono'),
          'c2celular_cliente'=>request('c2celular'),
          'c2mail_cliente'=>request('c2mail'),
          'c3cargo_cliente'=>request('c3cargo'),
          'c3telefono_cliente'=>request('c3telefono'),
          'c3celular_cliente'=>request('c3celular'),
          'c3mail_cliente'=>request('c3mail'),
          'inicioact_cliente'=>request('inicioact'),
          'habilitaciones_cliente'=>request('habilitacion'),
          'circ_cliente'=>request('circ'),
          'seccion_cliente'=>request('seccion'),
          'manzana_cliente'=>request('manzana'),
          'parcela_cliente'=>request('parcela'),
          'zonificacion_cliente'=>request('zonificacion'),
          'uf_cliente'=>request('uf'),
          'plantas_cliente'=>request('plantas'),
          'adminnombre_cliente'=>request('adminname'),
          'admintipodto_cliente'=>request('admindto'),
          'adminnro_cliente'=>request('adminnro'),
          'admincuit_cliente'=>request('admincuit'),
          'adminnacimiento_cliente'=>request('adminnac'),
          'admincargo_cliente'=>request('admincargo'),
          'apoderadonombre_cliente'=>request('aponombre'),
          'apoderadodto_cliente'=>request('apodtop'),
          'apoderadonro_cliente'=>request('aponro'),
          'apoderadocuit_cliente'=>request('apocuit'),
          'apoderadocargo_cliente'=>request('apocargo'),
          'potencial_cliente'=> '0',
        ]);

        return redirect()->route('clientes.index');
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

      $join = Cliente::select(
        'iva.nombre_iva',
        'iibb.nombre_iibb',
        'productores.nombre_productor',
        'iva.id_iva',
        'iibb.id_iibb',
        'productores.id_productor'
        )
      ->leftJoin('iibb', 'clientes.iibb_cliente', '=', 'iibb.id_iibb')
      ->leftJoin('iva', 'clientes.iva_cliente', '=', 'iva.id_iva')
      ->leftJoin('productores', 'clientes.productor_cliente', '=', 'productores.id_productor')
      ->where('clientes.id_cliente', '=' , $id)
      ->get()
      ->toArray();




      // Datos de los serviicos contratados

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
				AND
				cliente__serviciocontratado = $id
        "));

      $nota = Nota::select('*')
      ->where('notas.cliente_nota', '=' , $id)
      ->orderBy('id_nota', 'desc')
      ->get()
      ->toArray();


        $cliente = Cliente::findorfail($id);
        $iva = Iva::get();
        $iibb = Iibb::get();
        $productor = Productor::get();
        $user = auth()->user();
        return view('clientes.edit', compact('cliente', 'iva', 'iibb', 'productor','join','nota','user','servicioscontratados'));
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
        $cliente = Cliente::findorfail($id);
        $cliente->update([
          'razonsocial_cliente'=>request('razonsocial'),
          'cuit_cliente'=>request('cuit'),
          'direccion_cliente'=>request('direccion'),
          'calle_cliente'=>request('calle'),
          'numero_cliente'=>request('numero'),
          'piso_cliente'=>request('piso'),
          'oficina_cliente'=>request('oficina'),
          'localidad_cliente'=>request('localidad'),
          'cp_cliente'=>request('cp'),
          'provincia_cliente'=>request('provincia'),
          'telefono_cliente'=>request('telefono'),
          'fax_cliente'=>request('fax'),
          'mail_cliente'=>request('mailppal'),
          'mailsec_cliente'=>request('mailsec'),
          'productor_cliente'=>request('productor'),
          'observaciones_cliente'=>request('observaciones'),
          'actividad_cliente'=>request('actividad'),
          'iva_cliente'=>request('iva'),
          'iibb_cliente'=>request('iibb'),
          'c1cargo_cliente'=>request('c1cargo'),
          'c1telefono_cliente'=>request('c1telefono'),
          'c1celular_cliente'=>request('c1celular'),
          'c1mail_cliente'=>request('c1mail'),
          'c2cargo_cliente'=>request('c2cargo'),
          'c2telefono_cliente'=>request('c2telefono'),
          'c2celular_cliente'=>request('c2celular'),
          'c2mail_cliente'=>request('c2mail'),
          'c3cargo_cliente'=>request('c3cargo'),
          'c3telefono_cliente'=>request('c3telefono'),
          'c3celular_cliente'=>request('c3celular'),
          'c3mail_cliente'=>request('c3mail'),
          'inicioact_cliente'=>request('inicioact'),
          'habilitaciones_cliente'=>request('habilitacion'),
          'circ_cliente'=>request('circ'),
          'seccion_cliente'=>request('seccion'),
          'manzana_cliente'=>request('manzana'),
          'parcela_cliente'=>request('parcela'),
          'zonificacion_cliente'=>request('zonificacion'),
          'uf_cliente'=>request('uf'),
          'plantas_cliente'=>request('plantas'),
          'adminnombre_cliente'=>request('adminname'),
          'admintipodto_cliente'=>request('admindto'),
          'adminnro_cliente'=>request('adminnro'),
          'admincuit_cliente'=>request('admincuit'),
          'adminnacimiento_cliente'=>request('adminnac'),
          'admincargo_cliente'=>request('admincargo'),
          'apoderadonombre_cliente'=>request('aponombre'),
          'apoderadodto_cliente'=>request('apodtop'),
          'apoderadonro_cliente'=>request('aponro'),
          'apoderadocuit_cliente'=>request('apocuit'),
          'apoderadocargo_cliente'=>request('apocargo')
        ]);

        return redirect()->route('clientes.edit', $cliente);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $cliente = Cliente::findorfail($id);
      $cliente->delete();

      return redirect()->route('clientes.index');
    }
}
