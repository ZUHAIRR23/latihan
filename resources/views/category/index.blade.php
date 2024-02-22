@extends('admin.parent')

@section('content')
    <div class="card p-3">
        <h1>Category Index</h1>

        <hr>

        <div class="d-flex justify-content-end">
            <a href="{{ route('category.create') }}" class="btn btn-primary">
                Create Category</a>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <th>
                <tr>
                    <td>No</td>
                    <td>Name</td>
                    <td>Action</td>
                </tr>
            </th>
            <tbody>
                @foreach ($category as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->name }}</td>
                        <td>
                            <a href="{{ route('category.show', $row->id) }}" class="btn btn-info">Show Category</a>
                            <a href="{{ route('category.edit', $row->id) }}" class="btn btn-warning">Update Category</a>
                            <form action="{{ route('category.destroy', $row->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
