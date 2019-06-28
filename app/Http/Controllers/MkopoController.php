<?php

namespace App\Http\Controllers;

use App\Mkopo;
use App\mpokeaji;
use Illuminate\Http\Request;

class MkopoController extends Controller
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


    public function form1()
    {
        return view('pages.form1');
    }


    public function form2()
    {
        return view('pages.form2');
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
     
        $data = new mpokeaji();
        $data->name = request('name');
        $data->sex = request('sex');
        $data->tarehe_kupokea = request( 'tarehe_kupokea');
        $data->njia_kupokea = request('njia_kupokea');
        // $data->kiasi_pokea = request('kiasi_pokea');
        $data->email = request('email');
        $data->simu= request( 'simu');
        $data->eneo_analoishi = request( 'eneo_analoishi');
        $data->muda_kuishi = request( 'muda_kuishi');
        $data->makazi = request( 'makazi');
        $data->mengine = request( 'mengine');
        $data->jina = request( 'jina');
        $data->cheo = request( 'cheo');
        $data->tarehe = request( 'tarehe');
        $data->hela = request( 'hela');
      


        if ($data->save()) {

            return redirect('receiving')

                ->with('success', 'REcord added successfully');
        } else {
            return redirect('Vigango')

                ->with('success', 'sorry try again');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mkopo  $mkopo
     * @return \Illuminate\Http\Response
     */
    public function show(Mkopo $mkopo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mkopo  $mkopo
     * @return \Illuminate\Http\Response
     */
    public function edit(Mkopo $mkopo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mkopo  $mkopo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mkopo $mkopo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mkopo  $mkopo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mkopo $mkopo)
    {
        //
    }
}
