<?php

namespace App\Http\Controllers;

use App\Models\Receitas;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReceitasRequest;
use App\Http\Requests\UpdateReceitasRequest;

class ReceitasController extends Controller
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
     * @param  \App\Http\Requests\StoreReceitasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReceitasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Receitas  $receitas
     * @return \Illuminate\Http\Response
     */
    public function show(Receitas $receitas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Receitas  $receitas
     * @return \Illuminate\Http\Response
     */
    public function edit(Receitas $receitas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReceitasRequest  $request
     * @param  \App\Models\Receitas  $receitas
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReceitasRequest $request, Receitas $receitas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Receitas  $receitas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Receitas $receitas)
    {
        //
    }
}
