<?php

namespace App\Http\Controllers;
use App\Models\Cellphone;
use Inertia\Inertia;
use Illuminate\Http\Request;

class CellphoneController extends Controller
{
    public function index()
    {
        $cellphones = Cellphone::all();
        return Inertia::render('cellphone', [
            'cellphones' => $cellphones,
        ]);
    }

    public function create()
{
    return Inertia::render('Cellphone/create');
}

public function store(Request $request)
{
    $request->validate([
        'brand_name' => 'required',
        'price' => 'required|numeric',
        'released' => 'required|date',
    ]);

    $cellphone = new Cellphone();
    $cellphone->brand_name = $request->brand_name;
    $cellphone->price = $request->price;
    $cellphone->released = $request->released;
    $cellphone->save();

    return redirect('/cellphones')->with('success', 'Cellphone created successfully');
}
    public function show(Cellphone $cellphone)
    {
        return Inertia::render('Cellphone/view', ['cellphones' => $cellphone]);
    }

    public function update(Request $request, Cellphone $cellphone)
    {
        $validatedData = $request->validate([
            'brand_name' => 'required',
            'price' => 'required|numeric',
            'released' => 'required|date',
        ]);

        $cellphone->update($validatedData);

        return redirect('/cellphones');
    }

    public function destroy(Cellphone $cellphone)
    {
        $cellphone->delete();

        return redirect('/cellphones')->with('success', 'Cellphone deleted successfully');
    }

}
