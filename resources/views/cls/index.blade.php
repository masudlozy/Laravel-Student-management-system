@extends('layouts.app')

@section('title','Classes')
@section('content')

    <div class="card">
        <div class="card-body">
            Class List || <a href="{{ url('cls/create') }}">Add Class</a>
        </div>
    @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Classes</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
@foreach($clss as  $cls)
                <tr>
                    <th scope="row">{{ $cls->id }}</th>
                    <td>{{ $cls->title }}</td>
                    <td>
                        <a href="{{ url('cls/edit',$cls->id) }}">Edit</a> ||
                        <form id="delete-form-{{ $cls->id }}" method="post" action="{{ url('cls/delete', $cls->id) }}" style="display: none">
                            {{csrf_field()}}
                            {{ method_field('DELETE') }}
                        </form>

                        <a href="" onclick="
                                if(confirm('Are you sure, You want to Delete this ??'))
                                {
                                event.preventDefault();
                                document.getElementById('delete-form-{{ $cls->id }}').submit();
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
@endsection

