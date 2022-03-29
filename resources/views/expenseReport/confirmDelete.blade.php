@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Borrar Reporte {{ $report->id }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/expense_reports">Volver</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="/expense_reports/{{ $report->id }}" method="POST">
                @csrf
                @method('delete')
                <div class="form-group">
                    <button class="btn btn-primary mt-2" type="submit">
                        Borrar
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
