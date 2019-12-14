@extends('layouts.oculux')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    All Members
                    <div class="card-tools float-right">
                    <a href="{{ route('member.create')}}" class="btn btn-info btn-md btn-block">
                           add new
                    </a>
                    </div>
                </div>
                <div class="card-body">
                    all members goes
                </div>
            </div>
        </div>
    </div>
@endsection
