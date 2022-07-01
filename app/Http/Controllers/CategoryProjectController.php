<?php

namespace App\Http\Controllers;

use App\Models\CategoryProject;
use App\Http\Requests\StoreCategoryProjectRequest;
use App\Http\Requests\UpdateCategoryProjectRequest;

class CategoryProjectController extends Controller
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
     * @param  \App\Http\Requests\StoreCategoryProjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryProjectRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryProject  $categoryProject
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryProject $categoryProject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryProject  $categoryProject
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryProject $categoryProject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryProjectRequest  $request
     * @param  \App\Models\CategoryProject  $categoryProject
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryProjectRequest $request, CategoryProject $categoryProject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryProject  $categoryProject
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryProject $categoryProject)
    {
        //
    }
}
