@extends('layouts.app')

@section('title','Update Student Info')
@section('content')
    <div class="container">
        <div class="card">
        <div class="card-header">Update Student Info # {{ $students->name }}</div>
            @if (session('status'))
                <div class="alert alert-success" role='alert'>
                    {{ session('status') }}
                    </div>
            @endif
                <div class="card-body">
                    <form method="POST" action="{{ url('student/update',$students->id) }}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $students->name }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                            </div>
                        </div>

                        <div class="form-group row">
                    <label for="faname" class="col-md-4 col-form-label text-md-right">Farhet's Name</label>

                    <div class="col-md-6">
                        <input id="faname" type="text"
                            class="form-control{{ $errors->has('faname') ? ' is-invalid' : '' }}" name="faname"
                            value="{{ $students->faname }}" required autofocus>

                        @if ($errors->has('faname'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('faname') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">E-mail Address</label>

                    <div class="col-md-6">
                        <input id="email" type="text"
                            class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                            value="{{ $students->email }}" required autofocus>

                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="mobile" class="col-md-4 col-form-label text-md-right">Mobile No</label>

                    <div class="col-md-6">
                        <input id="mobile" type="text"
                            class="form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}" name="mobile"
                            value="{{ $students->mobile }}" required autofocus>

                        @if ($errors->has('mobile'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('mobile') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="Address" class="col-md-4 col-form-label text-md-right">Address</label>

                    <div class="col-md-6">
                        <input id="Address" type="textarea"
                            class="form-control{{ $errors->has('Address') ? ' is-invalid' : '' }}" name="Address"
                            value="{{ $students->Address }}" required autofocus>

                        @if ($errors->has('Address'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('Address') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="department" class="col-md-4 col-form-label text-md-right">Department</label>

                    <div class="col-md-6">
                        <select class="form-control{{ $errors->has('department') ? ' is-invalid' : '' }}" name="department" value="" required autofocus>
                          <option valu="">Select Department</option>
                            @foreach ($departments as $department)
                        <option valu= "{{ $department->id }}" {{ $students->id == $department->id ? 'selected' : '' }}> {{ $department->title }}</option>
                          @endforeach
                        </select>

                        @if ($errors->has('department'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('department') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label text-md-right">Class</label>

                    <div class="col-md-6">
                        <select class="form-control{{ $errors->has('classes') ? ' is-invalid' : '' }}" name="classes" value="" required autofocus>
                          <option valu="">Select Class</option>
                            @foreach ($class as $clas)
                        <option valu= "{{ $clas->id }}"{{ $students->id == $clas->id ? 'selected' : '' }}> {{ $clas->title }}</option>
                          @endforeach
                        </select>

                        @if ($errors->has('classes'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('classes') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="Role" class="col-md-4 col-form-label text-md-right">Student Role</label>

                    <div class="col-md-6">
                        <input id="Role" type="text"
                            class="form-control{{ $errors->has('Role') ? ' is-invalid' : '' }}" name="Role"
                            value="{{ $students->Role }}" required autofocus>

                        @if ($errors->has('Role'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('Role') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="reg" class="col-md-4 col-form-label text-md-right">Student Reg No</label>

                    <div class="col-md-6">
                        <input id="reg" type="text"
                            class="form-control{{ $errors->has('reg') ? ' is-invalid' : '' }}" name="reg"
                            value="{{ $students->reg }}" required autofocus>

                        @if ($errors->has('reg'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('reg') }}</strong>
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
