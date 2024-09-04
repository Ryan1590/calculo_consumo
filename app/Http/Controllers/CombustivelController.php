<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CalculoDeCombustivel;

class CombustivelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('consumo');
    }

    public function gasto(Request $request)
{
    $distancia = $request->input('distancia');
    $autonomia = $request->input('autonomia');

    $CalculoDeCombustivel = new CalculoDeCombustivel();
    $valor = $CalculoDeCombustivel->calcular($distancia, $autonomia);

    return view('resultado', ['valor' => $valor]);
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
