@extends('layouts.app')

@section('content')
    <div class="container">
        <div class = "row">
            <div class="col-md-8 offset-md-2">
                <div class ="card">
                    <div class = "card-header">
                        Lista de categorias
                        <a class = "btn btn-primary btn-sm float-right" href="{{ route('categories.create') }}">
                        Crear
                        </a>
                    </div>

                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th width = "10px">ID</th>
                                    <th>Nombre</th>
                                    <th colspan = "3">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td width = "10px">
                                        <a href = "{{ route('categories.show', $category->id) }}" class = "btn btn-sm btn-light">Ver</a>
                                    </td>
                                    <td width = "10px">
                                        <a href = "{{ route('categories.edit', $category->id) }}" class = "btn btn-sm btn-light">Editar</a>
                                    </td>
                                    <td width = "10px">
                                        {!! Form::open([ 'route' => [ 'categories.destroy', $category->id], 'method' => 'DELETE']) !!}
                                        <button class = "btn btn-sm btn-danger">Eliminar</button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $categories->render() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
