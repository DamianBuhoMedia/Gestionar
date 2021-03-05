<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;
use App\Subservicio;
use App\Potencial;
use App\Productor;
use App\Nota;

class PotencialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $clientespotenciales = Potencial::select('*')
      ->where('clientes.potencial_cliente', '=' , '1')
      ->get()
      ->toArray();


      return view('clientes-potenciales',compact('clientespotenciales'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productores = Productor::get();
        $subservicios = Subservicio::get();
        return view('clientes-potenciales-add', compact('productores','subservicios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      Potencial::create([
        'razonsocial_cliente' => request('razonsocial'),
        'telefono_cliente' => request('telefono'),
        'mail_cliente' => request('mailppal'),
        'cargo_cliente' => request('cargo'),
        'productor_cliente' => request('productor'),
        'tramite_cliente' => request('tramite'),
        'servicio_cliente' => request('servicio'),
        'cotizacion_cliente' => request('cotizacion'),
        'potencial_cliente' => '1'
      ]);

      return redirect()->route('clientes-potenciales');

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

      $result = Potencial::select(
        'clientes.razonsocial_cliente',
        'productores.nombre_productor',
        'clientes.id_cliente',
        'clientes.telefono_cliente',
        'clientes.mail_cliente',
        'clientes.cargo_cliente',
        'clientes.productor_cliente',
        'clientes.tramite_cliente',
        'clientes.cotizacion_cliente',
        'clientes.servicio_cliente',
        'subservicios.nombre_subservicio')
      ->leftJoin('productores', 'clientes.productor_cliente', '=', 'productores.id_productor')
      ->leftJoin('subservicios', 'clientes.servicio_cliente', '=', 'subservicios.id_subservicio')
      ->where('clientes.id_cliente', '=' , $id)
      ->get()
      ->toArray();


      $nota = Nota::select('*')
      ->where('notas.cliente_nota', '=' , $id)
      ->orderBy('id_nota', 'desc')
      ->get()
      ->toArray();

      $subservicios = Subservicio::get();

      return view('potenciales.edit',[
        'potencial' => Potencial::findorfail($id),
        'productores' => Productor::get(),
        'user' => $user = auth()->user(),
        'nota' => $nota,
        'data' => $result,
        'subservicios' => $subservicios
      ]);


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
        $cliente = Potencial::findorfail($id);
        $cliente->update([
          'razonsocial_cliente' => request('razonsocial'),
          'telefono_cliente' => request('telefono'),
          'mail_cliente' => request('mailppal'),
          'cargo_cliente' => request('cargo'),
          'productor_cliente' => request('productor'),
          'tramite_cliente' => request('tramite'),
          'servicio_cliente' => request('servicio'),
          'cotizacion_cliente' => request('cotizacion')
        ]);

        return redirect()->route('potenciales.edit', $cliente);
    }


    public function convert(Request $request, $id){

      $convert = Potencial::findorfail($id);
      $convert->update([
        'potencial_cliente' => '0'
      ]);

        return redirect()->route('clientes-potenciales');

    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Potencial::findorfail($id);
        $cliente->delete();

        return redirect()->route('clientes-potenciales');
    }
}
