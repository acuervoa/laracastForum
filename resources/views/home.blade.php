@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <!-- Username Form Input -->
                    <div class="form-group">
                        {{ Form::label('username', 'Username:') }}
                        {{ Form::text('username', null, ['class' => 'form-control']) }}
                    </div>

                    <!-- Password Form Input -->
                    <div class="form-group">
                        {{ Form::label('password', 'Password:') }}
                        {{ Form::password('password', ['class' => 'form-control']) }}
                    </div>

                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
