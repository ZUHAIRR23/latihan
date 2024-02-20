@extends('admin.parent')

@section('content')

<div class="card">
    <h1>Category Index</h1>

    <hr>

    <div class="d-flex justify-content-end">
        <a href="{{ route('category.create') }}" class="btn btn-primary">
            Create Category</a>
    </div>
</div>

@endsection