
@extends('layouts.app') 

@section('content')
    <div class="container">
        <h1>Lista de Productos</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre del Producto</th>
                    <th>Categoría</th>
                    <th>Subcategoría</th>
                    <th>Existencia</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productos as $producto)
                    <tr>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->categoria->nombre }}</td>
                        <td>{{ $producto->subcategoria ? $producto->subcategoria->nombre : '-' }}</td>
                        <td>{{ $producto->existencia }}</td>
                        <td>
                            <!-- Enlaces para editar y eliminar el producto -->
                            <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-primary">Editar</a>
                            <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('productos.create') }}" class="btn btn-success">Agregar Producto</a>
    </div>
@endsection
