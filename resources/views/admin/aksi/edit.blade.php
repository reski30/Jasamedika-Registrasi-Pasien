@extends('admin.dashboard')

@section('main')

<h3 class="display-6">Ubah Kelurahan</h3>


<form action="{{ url("admin/{$kelurahan->id}") }}" method="post">
    <!--di ambil dari halaman route:post  -->
    @method('PATCH')
    @csrf
    <div class="form-group">
        <label for="full_name">Nama Kelurahan :</label>
        <input value="{{ old('namakelurahan', $kelurahan->kelurahan) }}" id="" class="form-control" type="text" name="namakelurahan">
    </div>
    <button type="submit" class="btn btn-primary">Ubah</button>
</form>

@endsection