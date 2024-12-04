<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
        public function index()
    {
        $pessoas = Pessoa::all();
        return view('pessoa.index', compact('pessoas'));
    }

    public function create()
    {
        return view('pessoa.create');
    }

    public function store(Request $request)
    {
        Pessoa::create($request->all());
        return redirect('pessoa')->with('success', 'Pessoa created successfully.');
    }

    public function edit($id)
    {
        $pessoa = Pessoa::findOrFail($id);
        return view('pessoa.edit', compact('pessoa'));
    }

    public function update(Request $request, $id)
    {
        $pessoa = Pessoa::findOrFail($id);
        $pessoa->update($request->all());
        return redirect('pessoa')->with('success', 'Pessoa updated successfully.');
    }

    public function destroy($id)
    {
        $pessoa = Pessoa::findOrFail($id);
        $pessoa->delete();
        return redirect('pessoa')->with('success', 'Product deleted successfully.');
    }
}