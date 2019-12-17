@extends('layouts.oculux')
@section('datatablestyles')
    @include('partials_oculux.datatablestyles')
@endsection
@section('content')
<div class="row">
    <div class="col-12">

        <div class="card card-primary">
            <div class="card-header bg-secondary">
               All Expenses
                <div class="card-tools float-right">
                   <a href="{{ route('expenses.create')}}" class="btn btn-primary btn-round btn-sm mb-2 mt-0">
                        Add Expenses
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                 <table class="table table-striped table-hover dataTable js-exportable">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Member</th>
                        <th>Amount</th>
                        <th>Date</th>
                        <th>Category</th>

                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Title</th>
                        <th>Member</th>
                        <th>Amount</th>
                        <th>Date</th>
                        <th>Category</th>

                    </tr>
                </tfoot>

                <tbody>
              @foreach ($expenses as $expense)
              <tr>
                <td>{{$expense->title}}</td>
                <td>{{$expense->client->firstname}}</td>
                <td>{{$expense->amount}}</td>
                <td>{{$expense->date}}</td>
                <td>{{$expense->category->name}}</td>

            </tr>
                @endforeach

                </tbody>
            </table>
            </div>

        </div>
    </div>
</div>
@endsection
@section('datajs')
@include('partials_oculux.datatablesscripts')
@endsection
