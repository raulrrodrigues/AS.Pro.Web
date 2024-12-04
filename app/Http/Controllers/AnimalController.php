<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index()
    {
        $animais = Animal::all();
        return view('animal.index', compact('animais'));
    }

    public function create()
    {
        return view('animal.create');
    }

    public function store(Request $request)
    {
        Animal::create($request->all());
        return redirect('animal')->with('success', 'Animal created successfully.');
    }

    public function edit($id)
    {
        $animal = Animal::findOrFail($id);
        return view('animal.edit', compact('animal'));
    }

    public function update(Request $request, $id)
    {
        $animal = Animal::findOrFail($id);
        $animal->update($request->all());
        return redirect('animal')->with('success', 'Animal updated successfully.');
    }

    public function destroy($id)
    {
        $animal = Animal::findOrFail($id);
        $animal->delete();
        return redirect('animal')->with('success', 'Animal deleted successfully.');
    }
}