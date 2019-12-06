@extends('layouts.oculux')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                Add Savings
                <div class="card-tools float-right  mb-2">
                <a href="{{ route('income.index') }}" class="btn btn-info btn-round btn-block btn-xs">
                        Back to Lists
                    </a>                    
                </div>
            </div>
            <div class="card-body">
                <p>
                    Income Lists
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
