<?php

namespace App\Http\Controllers;

use App\Models\SubSubMenu;
use Illuminate\Http\Request;

class SubSubMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd('sub sub menu');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubSubMenu  $subSubMenu
     * @return \Illuminate\Http\Response
     */
    public function show(SubSubMenu $subSubMenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubSubMenu  $subSubMenu
     * @return \Illuminate\Http\Response
     */
    public function edit(SubSubMenu $subSubMenu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubSubMenu  $subSubMenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubSubMenu $subSubMenu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubSubMenu  $subSubMenu
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubSubMenu $subSubMenu)
    {
        //
    }
}
