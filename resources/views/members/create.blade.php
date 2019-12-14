@extends('layouts.oculux')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                Add Member
            </div>
            <div class="card-body">
                <div class="col-8 offset-2  ">
                    {!! Form::open(['route'=>'member.store', 'method'=>'POST']) !!}
                 <div class="row">
                    <div class="col-6">
                  <div class="form-group">
                                    {!! Form::label('firstname', 'Firstname') !!}
                                    {!! Form::text('firstname', null, ['class'=>'round form-control']) !!}
                  </div>

                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            {!! Form::label('lastname', 'Surname') !!}
                            {!! Form::text('surname', null, ['class'=>'round form-control']) !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                  <div class="form-group">
                                    {!! Form::label('email', 'Email Address') !!}
                                    {!! Form::email('email', null, ['class'=>'round form-control']) !!}
                  </div>

                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            {!! Form::label('mobile_number', 'Mobile Number') !!}
                            {!! Form::text('mobile_number', null, ['class'=>'round form-control']) !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            {!! Form::label('address', 'Address') !!}
                            {!! Form::text('address', null, ['class'=>'round form-control']) !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                  <div class="form-group">
                                    {!! Form::label('password', 'Password') !!}
                                    {!! Form::password('password', ['class'=>'round form-control']) !!}
                  </div>

                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            {!! Form::label('confirm_pass', 'Confirm Password') !!}
                            {!! Form::password('password_confirmation',  ['class'=>'round form-control']) !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                                        <div class="form-group">
                        {!! Form::label('photo', 'Upload Your Photo') !!}
                        {!! Form::file('photo') !!}
                    </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-4 offset-4">
                        {!! Form::submit('Add New Member', ['class'=>'btn btn-round btn-block btn-md btn-primary']) !!}
                    </div>
                </div>

                {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
