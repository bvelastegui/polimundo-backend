<?php

namespace App\Http\Controllers;

use App\Http\Resources\EmployeeResource;
use App\Models\Employee;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Responsable
     */
    public function index(): Responsable
    {
        $collection = Employee::all();

        return EmployeeResource::collection($collection);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @param  \Illuminate\Http\Request  $request
     * @return Responsable
     */
    public function show(Employee $employee, Request $request): Responsable
    {
        $includes = $request->query('include');

        if (str_contains($includes, 'company')) {
            $employee->load('company');
        }

        return new EmployeeResource($employee);
    }
}
