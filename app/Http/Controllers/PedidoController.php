<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index()
    {
        $pedidos = Pedido::all();
        return view('pedido.index', compact('pedidos'));
    }

    public function create()
    {
        return view('pedido.create');
    }

    public function store(Request $request)
    {
        Pedido::create($request->all());
        return redirect('pedido')->with('success', 'Pedido created successfully.');
    }

    public function edit($id)
    {
        $pedido = Pedido::findOrFail($id);
        return view('pedido.edit', compact('pedido'));
    }

    public function update(Request $request, $id)
    {
        $pedido = Pedido::findOrFail($id);
        $pedido->update($request->all());
        return redirect('pedido')->with('success', 'Pedido updated successfully.');
    }

    public function destroy($id)
    {
        $pedido = Pedido::findOrFail($id);
        $pedido->delete();
        return redirect('pessoa')->with('success', 'Pedido deleted successfully.');
    }
}