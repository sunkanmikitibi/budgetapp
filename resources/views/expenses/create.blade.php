@extends('layouts.oculux')
@section('content')
<div class="row">
    <div class="col-4">
        <div class="card">
            <div class="card-header bg-secondary">
                Add Category
            </div>
            <div class="card-body">
                {!! Form::open(['method'=>'POST']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Category Name') !!}
                    {!! Form::text('name', null, ['class'=>'form-control round']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Add Category', ['class'=>'btn btn-md btn-round btn-info']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>

    </div>
    <div class="col-8">
        <div class="card">
            <div class="card-header bg-secondary">
                Add New Expense
            </div>
            <div class="card-body">
                {!! Form::open(['method'=>'POST', 'route'=>'expenses.store']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
