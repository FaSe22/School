<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePupilRequest;
use App\Http\Requests\UpdatePupilRequest;
use App\Models\Pupil;

class PupilController extends Controller
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
     * @param  \App\Http\Requests\StorePupilRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePupilRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pupil  $pupil
     * @return \Illuminate\Http\Response
     */
    public function show(Pupil $pupil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pupil  $pupil
     * @return \Illuminate\Http\Response
     */
    public function edit(Pupil $pupil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePupilRequest  $request
     * @param  \App\Models\Pupil  $pupil
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePupilRequest $request, Pupil $pupil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pupil  $pupil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pupil $pupil)
    {
        //
    }
}
