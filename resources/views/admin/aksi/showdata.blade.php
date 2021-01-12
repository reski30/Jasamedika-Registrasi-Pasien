@extends('admin.dashboard')

@section('main')

<div class="container">
    <div class="row">
        <div class="col-md-11 text-right">
            <a href="{{ route('admin.aksi.create') }}" class="btn btn-success">Tambah Kelurahan Baru</a>
        </div>
    </div>
</div>

    <div class="row">   
        <div class="col-md-12">
            <table class="table table-striped table-bordered border-primary">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Nama Kelurahan</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($kelurahan as $kelurahans)
                    <tr>
                        <td>{{ $kelurahans->id }}</td>
                        <td>{{ $kelurahans->kelurahan }}</td>
                        <td>
                            <a href="{{ url("admin/{$kelurahans->id}/edit") }}" class="btn btn-warning">Ubah</a>
                        </td>
                        <td>
                            <form action="{{ url("admin/{$kelurahans->id}") }}" method="post">
                                @csrf
                                @method('DELETE')
                                    <button class="btn btn-danger">DELETE</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div> 
    </div>
    
@endsection