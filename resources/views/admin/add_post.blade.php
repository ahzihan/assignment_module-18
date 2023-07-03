@extends('layouts.admin_layout')

@section('title')
Add Post
@stop
@section('task')
Add Post
@stop
@section('main_content')

<form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <table class="table table-striped table-hover">
        <tr>
            <th>Title</th>
            <td><input type="text" name="title" class="form-control" placeholder="Enter Title">
            @error('title')
            <span class="text-danger">{{ $message }}</span>
            @enderror
            </td>

            <th>Photo</th>
            <td><input type="file" name="photo" class="form-control">
            @error('photo')
            <span class="text-danger">{{ $message }}</span>
            @enderror
            </td>
        </tr>
        <tr>
            <th>Description</th>
            <td><textarea name="description" id="" cols="30" rows="5"></textarea>
            @error('description')
            <span class="text-danger">{{ $message }}</span>
            @enderror
            </td>

            <th>Category</th>
            <td><select name="categoryId" id="">
                <option value="">Select Category</option>
                @foreach ($cat as $v)
                    <option value="{{ $v->id }}">{{ $v->categoryName }}</option>
                @endforeach

            </select>
            @error('categoryId')
            <span class="text-danger">{{ $message }}</span>
            @enderror
            </td>
        </tr>
        <tr>
            <td><input type="submit" class="btn btn-primary" value="Submit"></td>
        </tr>
    </table>

</form>

@stop
