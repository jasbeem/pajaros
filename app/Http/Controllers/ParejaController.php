<?php

namespace App\Http\Controllers;

use App\Models\Pareja;
use Illuminate\Http\Request;

class ParejaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parejas = Pareja::all();
        return view('parejas.index', compact('parejas'));
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
     * @param  \App\Models\Pareja  $pareja
     * @return \Illuminate\Http\Response
     */
    public function show(Pareja $pareja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pareja  $pareja
     * @return \Illuminate\Http\Response
     */
    public function edit(Pareja $pareja)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pareja  $pareja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pareja $pareja)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pareja  $pareja
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pareja $pareja)
    {
        //
    }
}
