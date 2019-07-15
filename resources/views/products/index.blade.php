@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  Productos
                  @can('products.create')
                    <a href="{{ route('products.create') }}"
                    class="btn btn-sm btn-primary float-right">
                        Crear
                    </a>
                  @endcan

                </div>

                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th colspan="3">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>
                                        @can('products.show')
                                            <a href="{{ route('products.show', $product->id) }}"
                                                    class="btn btn-outline-primary btn-sm">
                                                Ver
                                            </a>    
                                        @endcan
                                    </td>
                                    <td>
                                        @can('products.edit')
                                            <a href="{{ route('products.edit', $product->id) }}"
                                                        class="btn btn-outline-secondary btn-sm">
                                                Editar
                                            </a>    
                                        @endcan
                                    </td>
                                    <td>
                                        @can('products.destroy')
                                            <a href="{{ route('products.destroy', $product->id) }}"
                                                    class="btn btn-outline-danger btn-sm">
                                                Eliminar
                                            </a>    
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $products->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
