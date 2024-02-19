@extends('admin.parent')

@section('content')
<div class="card p-3">
    <h1>Admin Index</h1>
    <div class="d-flex justify-content-end">
        <a href="{{ route('admin.create') }}" class="btn btn-primary">Tambah User</a>
    </div>
</div>
@endsection