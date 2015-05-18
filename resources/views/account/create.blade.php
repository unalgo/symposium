@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Sign up</h2>
                </div>
                <div class="panel-body">
                    @if (! $errors->isEmpty())
                    <ul class="errors">
                        @foreach ($errors->all() as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif

                    {{ Form::open(array('action' => array('AccountController@store'))) }}
                    <div class="form-group">
                        {{ Form::email('email', null, ['autofocus' => 'autofocus', 'class' => 'form-control', 'placeholder' => 'Email address']) }}
                    </div>

                    <div class="form-group">
                        {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {{ Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'First name']) }}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {{ Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Last name']) }}
                            </div>
                        </div>
                    </div>

                    {{ Form::submit('Sign up', array('class' => 'button button--primary')) }}

                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@stop
