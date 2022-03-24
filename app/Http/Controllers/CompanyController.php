<?php

namespace App\Http\Controllers;

use App\Http\Resources\CompanyResource;
use App\Models\Company;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Support\Responsable
     */
    public function index(): Responsable
    {
        $collection = Company::all();

        return CompanyResource::collection($collection);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Support\Responsable
     */
    public function show(Company $company, Request $request): Responsable
    {
        $includes = $request->query('include');

        if (str_contains($includes, 'employees')) {
            $company->load('employees');
        }

        return new CompanyResource($company);
    }
}
