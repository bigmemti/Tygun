<?php

namespace App\Http\Controllers;

use App\Models\EmployeeRole;
use App\Http\Requests\StoreEmployeeRoleRequest;
use App\Http\Requests\UpdateEmployeeRoleRequest;

class EmployeeRoleController extends Controller
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
     * @param  \App\Http\Requests\StoreEmployeeRoleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployeeRoleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EmployeeRole  $employeeRole
     * @return \Illuminate\Http\Response
     */
    public function show(EmployeeRole $employeeRole)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EmployeeRole  $employeeRole
     * @return \Illuminate\Http\Response
     */
    public function edit(EmployeeRole $employeeRole)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmployeeRoleRequest  $request
     * @param  \App\Models\EmployeeRole  $employeeRole
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmployeeRoleRequest $request, EmployeeRole $employeeRole)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmployeeRole  $employeeRole
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmployeeRole $employeeRole)
    {
        //
    }
}
