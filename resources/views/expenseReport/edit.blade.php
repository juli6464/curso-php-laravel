@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Editar Reporte {{ $report->id }}</h1>
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
            <form action="/expense_reports/{{ $report->id }}" method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="title">Título:</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Escribe un título" value="{{ $report->title }}">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary mt-2" type="submit">
                        Actualizar
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
