<?php

namespace App\Http\Controllers;

use App\Models\Exception;
use App\Http\Requests\StoreExceptionRequest;
use App\Http\Requests\UpdateExceptionRequest;

class ExceptionController extends Controller
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
     * @param  \App\Http\Requests\StoreExceptionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExceptionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function show(Exception $exception)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function edit(Exception $exception)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExceptionRequest  $request
     * @param  \App\Models\Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateExceptionRequest $request, Exception $exception)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exception $exception)
    {
        //
    }
}
