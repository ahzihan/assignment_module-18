@extends('layouts.admin_layout')

@section('title')
Post List
@stop
@section('task')
Post List {{Session::get('success')}}
@stop
@section('main_content')
<table class="table table-striped table-hover">
  <tr>
    <th>Title</th>
    <th>Category</th>
    <th>Date</th>
    <th>Action</th>
  </tr>
  @forelse($data as $d)
  <tr>
    <td>{{ $d->title }}</td>
    <td>{{ $d->categoryId }}</td>
    <td>{{ $d->created_at }}</td>
    <td>
        <button class="btn btn-sm btn-primary">edit</button> |
        <a href="{{ route('post.destroy', $d->id) }}" class="btn btn-sm btn-danger">delete</a>
    </td>
  </tr>
  @empty
  <tr>
    <th class="text-center" colspan="5">No Item Found !</th>
  </tr>
  @endforelse

</table>
@stop
