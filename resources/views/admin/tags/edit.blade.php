@extends('layouts.app')

@section('content')
    <div class="container">
        <div class = "row">
            <div class="col-md-8 offset-md-2">
                <div class ="card">
                    <div class = "card-header">
                        Editar Etiqueta
                    </div>

                    <div class="card-body">
                        {!! Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => 'PUT']) !!}
                            @include('admin.tags.partials.form')
                        
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
