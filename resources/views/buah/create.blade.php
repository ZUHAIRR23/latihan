@extends('admin.parent')

@section('content')
    <div class="card p-4">
        <h1>Create Buah</h1>
        <form action="{{ route('buah.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="form-floating mb-3">
                <input type="" class="form-control" id="floatingInput" placeholder="Kesehatan" name="name">
                <label for="floatingInput">Nama Buah</label>
            </div>
            <div class="form-floating mb-3">
                <input type="" class="form-control" id="floatingInput" placeholder="Kesehatan" name="harga">
                <label for="floatingInput">Harga</label>
            </div>
            <div class="form-floating mb-3">
                <input type="" class="form-control" id="floatingInput" placeholder="Kesehatan" name="warna">
                <label for="floatingInput">Warna</label>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
