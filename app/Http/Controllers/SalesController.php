<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use App\Models\Models;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sales = Sales::where('active', true)->orderBy('sale_date', 'asc')->with('models')->get();
        return view('pages/admin/sales/home')->with('sales', $sales);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $models = Models::where('active', true)->orderBy('description', 'asc')->get();
        return view('pages/admin/sales/create')->with('models', $models);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $model = Models::where(['active' => true, 'id' => $request->input('models_id')])->first();
        $model->sales()->create($request->all());
        return redirect('admin/sales/')->withSuccess('Venda cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sales $sales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sales $sale)
    {
        $models = Models::where('active', true)->orderBy('description', 'asc')->get();
        return view('pages/admin/sales/edit')->with(['sale' => $sale, 'models' => $models]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sales $sale)
    {
        Sales::find($sale->id)->update($request->all());
        return redirect('admin/sales/')->withSuccess('Venda editada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sales $sales)
    {
        //
    }
}
