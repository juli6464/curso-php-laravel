@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Enviar Reporte</h1>
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
            <form action="/expense_reports/{{ $report->id }}/sendMail" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Escribe un correo" value="{{ old('email') }}">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary mt-2" type="submit">
                        Enviar correo
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
