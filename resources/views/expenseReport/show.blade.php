@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Reporte: {{ $report->title }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/expense_reports">Volver</a>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col">
            <a class="btn btn-primary" href="/expense_reports/{{ $report->id }}/confirmSendMail">Enviar email</a>
        </div>
    </div>
    <div class="row">
       <h3>Detalles</h3>
       <table class="table">
           @foreach ($report->expenses as $expense)
               <tr>
                   <td>{{  $expense->description }}</td>
                   <td>{{  $expense->created_at }}</td>
                   <td>{{ $expense->amount }}</td>
               </tr>
           @endforeach
       </table>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="/expense_reports/{{ $report->id }}/expenses/create">
                Nuevo gasto
            </a>
        </div>
    </div>
@endsection
