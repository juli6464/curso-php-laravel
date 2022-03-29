@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Nuevo Reporte</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/expense_reports">Volver</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/expense_reports" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Título:</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Escribe un título" value="{{ old('title') }}">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary mt-2" type="submit">
                        Crear
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
