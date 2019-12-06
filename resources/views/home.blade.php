@extends('layouts.oculux')

@section('content')
@include('partials_oculux.dashboard')
     <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Let's do some savings
                </div>
            </div>
        </div>
    </div>

@endsection
