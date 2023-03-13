<?php

namespace App\Http\Controllers;

use App\Models\PeopleList;
use App\Http\Requests\StorePeopleListRequest;
use App\Http\Requests\UpdatePeopleListRequest;

class PeopleListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StorePeopleListRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PeopleList $peopleList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PeopleList $peopleList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePeopleListRequest $request, PeopleList $peopleList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PeopleList $peopleList)
    {
        //
    }
}
