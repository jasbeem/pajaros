<?php

namespace App\Http\Controllers;

use App\Models\Criador;
use App\Http\Requests\CriadorStoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CriadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $criadors = Criador::all();
        return view('criadors.index', compact('criadors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $criador = new Criador();
        return view('criadors.create', compact('criador'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CriadorStoreRequest $request)
    {
        $data = $request->all();

        if ($request->has('foto_url')) {
            $image_path = $request->file('foto_url')->store('medias');
            $data['foto_url'] = $image_path;
        }
        Criador::create($data);

        return redirect()->route('criadors.index')->with(['status' => 'Success', 'color' => 'green', 'message' => 'Product created successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Criador  $criador
     * @return \Illuminate\Http\Response
     */
    public function show(Criador $criador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Criador  $criador
     * @return \Illuminate\Http\Response
     */
    public function edit(Criador $criador)
    {
        return view('criadors.create', compact('criador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Criador  $criador
     * @return \Illuminate\Http\Response
     */
    public function update(CriadorStoreRequest $request, Criador $criador)
    {
        $data = $request->all();

        if ($request->has('foto_url')) {
            Storage::delete("$criador->foto_url");

            $image_path = $request->file('foto_url')->store('medias');
            $data['foto_url'] = $image_path;
        }

        $criador->fill($data);
        $criador->save();

        return redirect()->route('criadors.index')->with(['status' => 'Success', 'color' => 'green', 'message' => 'Breeder updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Criador  $criadore
     * @return \Illuminate\Http\Response
     */
    public function destroy(Criador $criador)
    {
        try {
            $criador->delete();
            $result = ['status' => 'success', 'color' => 'green', 'message' => 'Deleted successfully'];
        } catch (\Exception $e) {
            $result = ['status' => 'error', 'color' => 'red', 'message' => 'Product cannot be delete'];
        }

        return redirect()->route('criadors.index')->with($result);
    }
}
