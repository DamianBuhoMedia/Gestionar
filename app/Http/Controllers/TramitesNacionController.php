<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\TramitesNacion;

class TramitesNacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $nacion = DB::select(
        DB::raw("SELECT * FROM tramites_nacion"));

      return view('nacion.index',compact(
          'nacion'
        ));
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
      $nacion = DB::select(
        DB::raw("SELECT * FROM tramites_nacion WHERE id = $id"));

      return view('nacion.edit',compact(
          'nacion'
        ));
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
      $tramite = TramitesNacion::findorfail($id);
      $tramite->update([
        'expediente' =>  request('expediente'),
        'inicio' =>  request('inicio'),
        'c1' =>  request('c1'),
        'c2' =>  request('c2'),
        'c3' =>  request('c3'),
        'c4' =>  request('c4'),
        'c5' =>  request('c5'),
        'c6' =>  request('c6'),
        'c7' =>  request('c7'),
        'c8' =>  request('c8'),
        'c9' =>  request('c9'),
        'c10' =>  request('c10'),
        'c11' =>  request('c11'),
        'c12' =>  request('c12'),
        'c13' =>  request('c13'),
        'c14' =>  request('c14'),
        'c15' =>  request('c15'),
        'c16' =>  request('c16'),
        'c17' =>  request('c17'),
        'c18' =>  request('c18'),
        'c19' =>  request('c19'),
        'c20' =>  request('c20'),
        'c21' =>  request('c21'),
        'c22' =>  request('c22'),
        'c23' =>  request('c23'),
        'c24' =>  request('c24'),
        'c25' =>  request('c25'),
        'c26' =>  request('c26'),
        'c27' =>  request('c27'),
        'c28' =>  request('c28'),
        'c29' =>  request('c29'),
        'c30' =>  request('c30'),
        'c31' =>  request('c31'),
        'c32' =>  request('c32'),
        'c33' =>  request('c33'),
        'c34' =>  request('c34'),
        'c35' =>  request('c35'),
        'c36' =>  request('c36'),
        'c37' =>  request('c37'),
        'c38' =>  request('c38'),
        'c39' =>  request('c39'),
        'c40' =>  request('c40'),
        'c41' =>  request('c41'),
        'c42' =>  request('c42'),
        'c43' =>  request('c43'),
        'c44' =>  request('c44'),
        'c45' =>  request('c45')
      ]);
     return redirect()->back()->with('success', 'your message,here');
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
