@extends('admin.dashboard')

@section('main')

<h3 class="display-6">Add New</h3>


<form action="{{ route('admin.create') }}" method="post">
    <!--di ambil dari halaman route:post  -->
    @csrf
    <div class="form-group">
        <label for="full_name">Nama Kelurahan :</label>
        <input value="{{ old('namakelurahan') }}" id="" class="form-control" type="text" name="namakelurahan">
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
</form>

@endsection

</div>