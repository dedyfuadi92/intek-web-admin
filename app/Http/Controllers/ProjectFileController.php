<?php

namespace App\Http\Controllers;

use App\Models\ProjectFile;
use App\Http\Requests\StoreProjectFileRequest;
use App\Http\Requests\UpdateProjectFileRequest;

class ProjectFileController extends Controller
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
     * @param  \App\Http\Requests\StoreProjectFileRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectFileRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectFile  $projectFile
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectFile $projectFile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjectFile  $projectFile
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectFile $projectFile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectFileRequest  $request
     * @param  \App\Models\ProjectFile  $projectFile
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectFileRequest $request, ProjectFile $projectFile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectFile  $projectFile
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectFile $projectFile)
    {
        //
    }
}
