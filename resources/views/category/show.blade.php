@extends('admin.parent')

@section('content')

<div class="card p-4">
    <label for="">Name Category</label>
    <input type="text" value="{{ $category->name }}" disabled>

    <label for="">ID Category</label>
    <input type="text" value="{{ $category->id }}" disabled>
</div>

@endsection