<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    //
    public function index() {
        $productos = Producto::with('categoria', 'subcategorias')->get();
        return view('productos.index', compact('productos'));
    }

    public function create() {
        $categorias = Categoria::whereNull('padre_id')->get();
        $subcategorias = Categoria::whereNotNull('padre_id')->get();
        return view('productos.create', compact('categorias', 'subcategorias'));
    }

    public function show($id) {
        $producto = Producto::with('subcategorias')->find($id);
        return response()->json($producto);
    }

    public function update(Request $request, $id) {

    }

    public function destroy($id) {
        
    }
}
