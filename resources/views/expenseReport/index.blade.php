@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Reportes</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="/expense_reports/create">Crear nuevo reporte</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                @foreach ($expenseReports as $expenseReport)
                    <tr>
                        <td><a href="/expense_reports/{{ $expenseReport->id }}">{{ $expenseReport->title }}</a></td>
                        <td><a href="/expense_reports/{{ $expenseReport->id }}/edit" class="btn btn-sm btn-primary">Editar</a></td>
                        <td><a href="/expense_reports/{{ $expenseReport->id }}/confirmDelete" class="btn btn-sm btn-danger">Borrar</a></td>

                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
