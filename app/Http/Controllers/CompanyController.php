<?php

namespace App\Http\Controllers;

use App\Http\Resources\CompanyResource;
use App\Models\Company;
use Illuminate\Contracts\Support\Responsable;

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
     * @return \Illuminate\Contracts\Support\Responsable
     */
    public function show(Company $company): Responsable
    {
        return new CompanyResource($company);
    }
}
