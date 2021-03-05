<?php

namespace App\Http\Controllers;

use App\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores = Proveedor::get();
        return view('proveedores.index', compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proveedores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Proveedor::create([
          'razonsocial_proveedor'  => request('razonsocial'),
          'contacto_proveedor'  => request('contacto'),
          'cuit_proveedor'  => request('cuit'),
          'cbu_proveedor'  => request('cbu'),
          'direccion_proveedor'  => request('direccion'),
          'calle_proveedor'  => request('calle'),
          'numero_proveedor'  => request('numero'),
          'piso_proveedor'  => request('piso'),
          'oficina_proveedor'  => request('oficina'),
          'localidad_proveedor'  => request('localidad'),
          'cp_proveedor'  => request('cp'),
          'pais_proveedor'  => request('pais'),
          'provincia_proveedor'  => request('provincia'),
          'telefono_proveedor'  => request('telefono'),
          'fax_proveedor'  => request('fax'),
          'mailppal_proveedor'  => request('mailppal'),
          'mailsec_proveedor'  => request('mailsec'),
          'observaciones_proveedor'  => request('onservaciones'),
        ]);

          return redirect()->route('proveedores.index');
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
      return view('proveedores.edit',[
        'proveedor' =>  Proveedor::findorfail($id)
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
      $proveedor = Proveedor::findorfail($id);
      $proveedor->update([
        'razonsocial_proveedor'  => request('razonsocial'),
        'contacto_proveedor'  => request('contacto'),
        'cuit_proveedor'  => request('cuit'),
        'cbu_proveedor'  => request('cbu'),
        'direccion_proveedor'  => request('direccion'),
        'calle_proveedor'  => request('calle'),
        'numero_proveedor'  => request('numero'),
        'piso_proveedor'  => request('piso'),
        'oficina_proveedor'  => request('oficina'),
        'localidad_proveedor'  => request('localidad'),
        'cp_proveedor'  => request('cp'),
        'pais_proveedor'  => request('pais'),
        'provincia_proveedor'  => request('provincia'),
        'telefono_proveedor'  => request('telefono'),
        'fax_proveedor'  => request('fax'),
        'mailppal_proveedor'  => request('mailppal'),
        'mailsec_proveedor'  => request('mailsec'),
        'observaciones_proveedor'  => request('onservaciones')
      ]);

     return redirect()->route('proveedores.edit',$proveedor);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $proveedor = Proveedor::findorfail($id);
       $proveedor->delete();
       return redirect()->route('proveedores.index');
    }
}
