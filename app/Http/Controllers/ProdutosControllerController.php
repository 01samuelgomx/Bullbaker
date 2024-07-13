<?php

namespace App\Http\Controllers;

use App\Models\ProdutosController;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProdutosControllerRequest;
use App\Http\Requests\UpdateProdutosControllerRequest;

class ProdutosControllerController extends Controller
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
     * @param  \App\Http\Requests\StoreProdutosControllerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProdutosControllerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProdutosController  $produtosController
     * @return \Illuminate\Http\Response
     */
    public function show(ProdutosController $produtosController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProdutosController  $produtosController
     * @return \Illuminate\Http\Response
     */
    public function edit(ProdutosController $produtosController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProdutosControllerRequest  $request
     * @param  \App\Models\ProdutosController  $produtosController
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProdutosControllerRequest $request, ProdutosController $produtosController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProdutosController  $produtosController
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProdutosController $produtosController)
    {
        //
    }
}
