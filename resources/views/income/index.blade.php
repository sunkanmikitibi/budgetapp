@extends('layouts.oculux')
@section('datatablestyles')
    @include('partials_oculux.datatablestyles')
@endsection
@section('content')
<div class="row">
    <div class="col-12">

        <div class="card ">
            <div class="card-header">
                Savings
                <div class="card-tools float-right">
                   <a href="{{ route('income.create')}}" class="btn btn-primary btn-round mb-2">
                        Add Savings
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
                        <th>Income Category</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Title</th>
                        <th>Member</th>
                        <th>Amount</th>
                        <th>Date</th>
                        <th>Income Category</th>
                        <th>Salary</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>Tatyana Fitzpatrick</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>19</td>
                        <td>2010/03/17</td>
                        <td>$385,750</td>
                    </tr>
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
