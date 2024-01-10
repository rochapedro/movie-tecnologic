<?php

namespace App\Http\Controllers;

use App\Models\Configurations;
use Illuminate\Http\Request;

class ConfigurationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $configurations = Configurations::latest()->first();
        return view('pages/admin/configurations/home')->with('configurations', $configurations);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Configurations $configurations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Configurations $configurations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Configurations $configurations)
    {
        Configurations::latest()->first()->update($request->all());
        return redirect('admin/configurations/')->withSuccess('Informações alteradas com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Configurations $configurations)
    {
        //
    }
}
