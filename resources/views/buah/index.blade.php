@extends('admin.parent')

@section('content')
    <div class="card p-3">
        <h1>Buah Index</h1>

        <hr>

        <div class="d-flex justify-content-end">
            <a href="{{ route('buah.create') }}" class="btn btn-primary">
                Create Buah</a>
        </div>
    </div>
@endsection
