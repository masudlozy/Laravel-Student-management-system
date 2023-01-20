@extends('layouts.app')

@section('title','Update Class Info')
@section('content')
    <div class="container">
        <div class="card">
        <div class="card-header">Update Class Info # {{ $cls->id }}</div>
            @if (session('status'))
                <div class="alert alert-success" role='alert'>
                    {{ session('status') }}
                    </div>
            @endif
                <div class="card-body">
                    <form method="POST" action="{{ url('cls/update',$cls->id) }}">
                        @csrf
                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">Add Class</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ $cls->title }}" required autofocus>

                        @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                        @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                   Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </div>
@endsection
