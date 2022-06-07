<?php

namespace App\Http\Controllers;

use App\Models\Pajaro;
use Illuminate\Http\Request;

class PajaroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pajaros = Pajaro::all();
        return view('pajaros.index', compact('pajaros'));
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
     * @param  \App\Models\Pajaro  $pajaro
     * @return \Illuminate\Http\Response
     */
    public function show(Pajaro $pajaro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pajaro  $pajaro
     * @return \Illuminate\Http\Response
     */
    public function edit(Pajaro $pajaro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pajaro  $pajaro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pajaro $pajaro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pajaro  $pajaro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pajaro $pajaro)
    {
        //
    }
}
