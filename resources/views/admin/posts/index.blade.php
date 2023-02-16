@extends('admin.master')

@section('title' ,'ALL Posts | ' . env('APP_NAME'))

@section('styles')
{{-- <script scr="https://cdn.tailwindcss.com" ></script> --}}

<style>
    .table th,
    .table td{
        vertical-align: middle
    }
</style>
@endsection
@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">All Posts</h1>

<table class="table table-bordered table-hover table-striped">
    <tr class="bg-dark text-white">
        <th>ID</th>
        <th>Title</th>
        <th>Image</th>
        <th>Author</th>
        <th>Create At</th>
        <th>Updated At</th>
        <th>Actions</th>
    </tr>

    @forelse ($posts as $post)
    <tr>
        <td>{{ $post->id }}</td>
        <td>{{ $post->title }}</td>
        <td><img width="100" src="{{ $post->image }}" alt=""> </td>
        <td>{{ $post->user_id }}</td>
        <td>{{ $post->created_at }}</td>
        <td>{{ $post->updated_at }}</td>
        <td>
            <a href="#" class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a>
            <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
            <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
        </td>

    </tr>
    @empty
    <tr>
        <td colspan="7">No Data Found</td>
    </tr>
    @endforelse

</table>
{{ $posts->links()  }}
@stop
