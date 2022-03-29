@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Nuevo gasto</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/expense_reports/{{ $report->id }}">Volver</a>
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
            <form action="/expense_reports/{{ $report->id }}/expenses" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Descripción:</label>
                    <input type="text" class="form-control" name="description" id="description" placeholder="Escribe una descripcion" value="{{ old('description') }}">
                </div>
                <div class="form-group">
                    <label for="title">Cantidad:</label>
                    <input type="text" class="form-control" name="amount" id="amount" placeholder="Escribe una cantidad" value="{{ old('description') }}">
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
