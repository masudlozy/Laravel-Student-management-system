@extends('layouts.app')

@section('title','Student')
@section('content')

<div class="card">
    <div class="card-body">
        Student List || <a href="{{ url('student/create') }}">Add Student</a>
    </div>
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
   <div class="table-responsive">
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Farhet's Name</th>
                <th scope="col">E-mail Address</th>
                <th scope="col">Mobile No</th>
                <th scope="col">Address</th>
                <th scope="col">Department</th>
                <th scope="col">Class</th>
                <th scope="col">Student Role</th>
                <th scope="col">Student Reg No</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <th scope="row">{{ $student->id }}</th>
                <td>{{ $student->name }}</td>
                <td>{{ $student->faname }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->mobile }}</td>
                <td>{{ $student->Address }}</td>
                <td>{{ $student->department }}</td>
                <td>{{ $student->classes }}</td>
                <td>{{ $student->Role }}</td>
                <td>{{ $student->reg }}</td>
                <td>
                    <a href="{{ url('student/edit',$student->id) }}">Edit</a> ||
                    <form id="delete-form-{{ $student->id }}" method="post"
                        action="{{ url('student/delete', $student->id) }}" style="display: none">
                        {{csrf_field()}}
                        {{ method_field('DELETE') }}
                    </form>

                    <a href="" onclick="
                                if(confirm('Are you sure, You want to Delete this ??'))
                                {
                                event.preventDefault();
                                document.getElementById('delete-form-{{ $student->id }}').submit();
                                }
                                else {
                                event.preventDefault();
                                }">Delete
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
@endsection
