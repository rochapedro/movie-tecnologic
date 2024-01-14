<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sales;
use App\Models\Configurations;
use Carbon\Carbon;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $configurations = Configurations::latest()->first();
        return view('pages/public/home')->with('configurations', $configurations);
    }

    public function warranty() {
        $configurations = Configurations::latest()->first();
        return view('pages/public/warranty/home')->with('configurations', $configurations);
    }

    public function findWarranty(Request $request) {
        $sale = Sales::where('serial_number', '=', $request->serial_number)->with('models')->first();

        if ($sale) {
            // data limite da garantia
        $warranty_period = Carbon::parse($sale->warranty_period);

        // data da compra
        $sale_date = Carbon::parse($sale->sale_date);

        // data atual
        $atual_date = Carbon::now();

        // diferença entre a data atual a data limite da garantia
        $warranty_result = $atual_date->diffInDays($warranty_period);

        // quantidade de dias totais desde a compra até o limite da garantia
        $warranty_total_period = $sale_date->diffInDays($warranty_period);

        $warranty_percent = (int)round(($warranty_result * 100) / $warranty_total_period);

        $sale->warranty_result = $warranty_result;
        $sale->warranty = $atual_date <= $warranty_period ? 'Em garantia' : 'Garantia encerrada';
        $sale->warranty_status = $atual_date <= $warranty_period ? true : false;
        $sale->warranty_percent = $warranty_percent;

        $configurations = Configurations::latest()->first();
            return view('pages/public/warranty/found')->with(['sale' => $sale, 'configurations' => $configurations]);

        } else {
            return redirect()->back()->withErrors(['msg' => 'Número de série não encontrado']);
        }
        
    }
    
}
