<?php

namespace App\Http\Controllers;

use App\Models\Timekeeping;
use App\Http\Requests\StoreTimekeepingRequest;
use App\Http\Requests\UpdateTimekeepingRequest;

class TimekeepingController extends Controller
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
    public function store(StoreTimekeepingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Timekeeping $timekeeping)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Timekeeping $timekeeping)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTimekeepingRequest $request, Timekeeping $timekeeping)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Timekeeping $timekeeping)
    {
        //
    }
}
