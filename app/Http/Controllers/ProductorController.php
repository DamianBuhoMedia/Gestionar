<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productor;

class ProductorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $productores = Productor::get();

      return view('productores', compact('productores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('productoresAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Productor::create([
          'nombre_productor'  => request('nombre'),
          'cuit_productor'  => request('cuit'),
          'direccion_productor'  => request('direccion'),
          'calle_productor'  => request('calle'),
          'numero_productor'  => request('numero'),
          'piso_productor'  => request('piso'),
          'oficina_productor'  => request('oficina'),
          'localidad_productor'  => request('localidad'),
          'cp_productor'  => request('cp'),
          'pais_productor'  => request('pais'),
          'provincia_productor'  => request('provincia'),
          'telefono_productor'  => request('telefono'),
          'fax_productor'  => request('fax'),
          'mailppal_productor'  => request('mailppal'),
          'mailsec_productor'  => request('mailsec'),
          'observaciones_productor'  => request('onservaciones'),
          'contact1cargo_productor'  => request('d1cargo'),
          'contact1telefono_productor'  => request('c1tel'),
          'contact1celular_productor'  => request('c1cel'),
          'contact1mail_productor'  => request('c1mail'),
          'contact2cargo_productor'  => request('c2cargo'),
          'contact2telefono_productor'  => request('c2tel'),
          'contact2celular_productor'  => request('c2cel'),
          'contact2mail_productor'  => request('c2mail'),
          'contact3cargo_productor'  => request('c3cargo'),
          'contact3telefono_productor'  => request('c3tel'),
          'contact3celular_productor'  => request('c3cel'),
          'contact3mail_productor'  => request('c3mail')

        ]);

        return redirect()->route('productores');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      return view('productores.edit',[
        'productor' =>  Productor::findorfail($id)
      ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $productor)
    {
         $productor = Productor::findorfail($productor);
         $productor->update([
           'nombre_productor'  => request('nombre'),
           'nombre_productor'  => request('nombre'),
           'cuit_productor'  => request('cuit'),
           'direccion_productor'  => request('direccion'),
           'calle_productor'  => request('calle'),
           'numero_productor'  => request('numero'),
           'piso_productor'  => request('piso'),
           'oficina_productor'  => request('oficina'),
           'localidad_productor'  => request('localidad'),
           'cp_productor'  => request('cp'),
           'pais_productor'  => request('pais'),
           'provincia_productor'  => request('provincia'),
           'telefono_productor'  => request('telefono'),
           'fax_productor'  => request('fax'),
           'mailppal_productor'  => request('mailppal'),
           'mailsec_productor'  => request('mailsec'),
           'observaciones_productor'  => request('onservaciones'),
           'contact1cargo_productor'  => request('c1cargo'),
           'contact1telefono_productor'  => request('c1tel'),
           'contact1celular_productor'  => request('c1cel'),
           'contact1mail_productor'  => request('c1mail'),
           'contact2cargo_productor'  => request('c2cargo'),
           'contact2telefono_productor'  => request('c2tel'),
           'contact2celular_productor'  => request('c2cel'),
           'contact2mail_productor'  => request('c2mail'),
           'contact3cargo_productor'  => request('c3cargo'),
           'contact3telefono_productor'  => request('c3tel'),
           'contact3celular_productor'  => request('c3cel'),
           'contact3mail_productor'  => request('c3mail')
         ]);

        return redirect()->route('productores.edit',$productor);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($productor)
    {
       $productor = Productor::findorfail($productor);
        $productor->delete();
        return redirect()->route('productores');

    }
}
