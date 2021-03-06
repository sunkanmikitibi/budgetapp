@extends('layouts.oculux')
@section('datatablestyles')
    @include('partials_oculux.datatablestyles')
@endsection
@section('content')
<div class="row">
    <div class="col-12">

        <div class="card">
            <div class="card-header bg-secondary">
                <div class="card-tools float-right">
                    <a href="{{ route('income.create')}}" class="btn btn-primary btn-round btn-sm">
                         Add Savings
                     </a>
                 </div>
                Savings

            </div>
            <div class="card-body table-responsive">
                 <table class="table table-striped table-hover dataTable js-exportable">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Member</th>
                        <th>Amount</th>
                        <th>Date</th>
                        <th>Income Category</th>

                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Title</th>
                        <th>Member</th>
                        <th>Amount</th>
                        <th>Date</th>
                        <th>Income Category</th>

                    </tr>
                </tfoot>

                <tbody>
              @foreach ($incomes as $saving)
              <tr>
                <td>{{$saving->title}}</td>
                <td>{{$saving->client->firstname}}</td>
                <td>{{$saving->amount}}</td>
                <td>{{$saving->date}}</td>
                <td>{{$saving->category->name}}</td>

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
