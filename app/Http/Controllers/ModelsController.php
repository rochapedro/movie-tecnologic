<?php

namespace App\Http\Controllers;

use App\Models\Models;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ModelsController extends Controller
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
        $models = Models::where('active', true)->orderBy('description', 'asc')->get();
        return view('pages/admin/models/home')->with('models', $models);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages/admin/models/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required',
            'image' => ['required', 'image', 'extensions:jpg,png,jpeg']
        ]);

        $model = new Models;

        $model->description = $request->description;

        // Image upload
        if($request->has('image')) {
            $requestImage = $request->image;

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")).".".$requestImage->extension();

            $requestImage->move(public_path('img/models'), $imageName);

            $model->image = $imageName;
        }

        $model->save();
        return redirect('admin/models/')->withSuccess('Modelo cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Models $models)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Models $model)
    {
        return view('pages/admin/models/edit')->with('model', $model);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Models $model)
    {
        $request->validate([
            'description' => 'required',
            'current_image' => ['required'],
            'image' => ['nullable', 'image', 'extensions:jpg,png,jpeg']
        ]);

        $model = Models::find($model->id);

        $model->description = $request->description;

        // Image upload
        if($request->hasFile('image')) {
            $requestImage = $request->image;
            
            File::delete(public_path('img/models/').$request->current_image);

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")).".".$requestImage->extension();

            $requestImage->move(public_path('img/models'), $imageName);

            $model->image = $imageName;
        }

        $model->save();
        return redirect('admin/models/')->withSuccess('Modelo cadastrado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Models $model)
    {
        Models::where('id', $model->id)->update(['active' => false]);
        return redirect('admin/models/')->withSuccess('Modelo excluido com sucesso!');
    }
}
