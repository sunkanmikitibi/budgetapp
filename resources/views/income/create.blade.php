@extends('layouts.oculux')
@section('datepickerstyles')
    @include('partials_oculux.datepickerstyles')
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="float-right">
  <a href="{{ route('income.index') }}" class="btn btn-info btn-round btn-block btn-xs">
                    Back to Lists
                </a>
        </div>

    </div>
    <div class="col">
        @include('partials_oculux._messages')
    </div>
</div>
<div class="row">
    <div class="col-4">
<div class="card">
    <div class="card-header">
        Savings Category
    </div>
    <div class="card-body">
        {!! Form::open(['method'=>'POST', 'route'=>'savingscat.store']) !!}
        <div class="row">
            <div class="col-12">
                 <div class="form-group">
                {!! Form::label('name', 'Category Name') !!}
                <input id="name" type="name" class="round form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" autofocus>

                @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
            </div>
            <div class="form-group">
                {!! Form::submit('Create Category', ['class'=>'btn btn-md btn-round btn-secondary']) !!}
            </div>
            </div>

        </div>
        {!! Form::close() !!}
    </div>
</div>
    </div>
    <div class="col-8">
        <div class="card">
            <div class="card-header">
                Add Savings
            </div>
            <div class="card-body">
                <h5>Saving Transactions</h5>
                <div class="col-12">
                     {!! Form::open(['route'=>'income.store', 'method'=>'POST']) !!}
                 <div class="row">
                   <div class="col-12">
                     <div class="form-group">
                         {!! Form::label('title', 'Title:') !!}
                         {!! Form::text('title', null, ['class'=>'form-control round']) !!}
                     </div>
                 </div>
                </div>
                 <div class="row">
                      <div class="col-6">
                            {!! Form::label('amount', 'Amount') !!}
                            <div class="input-group mb-3">

                                   <div class="input-group-prepend">
                                <span class="input-group-text">₦</span>
                            </div>
                         {!! Form::text('amount', null, ['class'=>'round form-control']) !!}
                         <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>

                                </div>
                        </div>
                 <div class="col-6">
                        <div class="form-group">
                            {!! Form::label('amount', 'Income Category') !!}
                            <select name="income_category" id="" class="form-control round">
                                <option value="">Select Income Category</option>
                                @foreach ($incomecats as $category)
                            <option value="{{$category->id}}">{{ $category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                 </div>
                 <div class="row">
                     <div class="col-6">
                        <div class="form-group">
                            {!! Form::label('member_id', 'Member') !!}
                            <select name="member_id" id="" class="round form-control">
                                <option value="">Select Member</option>
                                @foreach ($members as $client)
                            <option value="{{$client->id}}">{{ $client->surname }} {{ $client->firstname }}</option>
                                @endforeach
                            </select>
                        </div>
                     </div>
                     <div class="col-6">
                         <div class="form-group">
                             {!! Form::label('date', 'Date') !!}
                             {!! Form::text('date', null, ['class'=>'form-control round', 'data-provide'=>'datepicker', 'data-date-autoclose'=>'true']) !!}
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-12">
                         <div class="form-group">
                            {!! Form::label('description', 'Summary') !!}
                            {!! Form::textarea('description', null, ['class'=>'form-control round']) !!}
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-12">
                         <div class="form-group">
                             {!! Form::submit('Add Savings', ['class'=>'btn btn-md btn-info btn-round btn-flat']) !!}
                         </div>
                     </div>
                 </div>

                 {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
@section('datepickerscripts')
    @include('partials_oculux.datepickerscripts')
@endsection
