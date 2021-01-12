@extends('operator.dashboard')

@section('main')

<div class="container">
<h1 class="title mb-3">Form Input Data Pasien</h1>
<hr>
    <div class="row">
        <div class="col-md-11 text-left">
            <a href="{{ route('operator.aksi.create') }}" class="btn btn-success">Tambah Pasien Baru</a>
        </div>
    </div>
</div>

    <div class="row">   
        <div class="col-md-12">
            <table class="table table-striped table-bordered border-primary">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Pasien</th>
                        <th>Nama Pasien</th>
                        <th>Tgl Lahir</th>
                        <th>JK</th>
                        <th>Alamat</th>
                        <th>No.Hp</th>
                        <th>RT/RW</th>
                        <th>Kelurahan</th>
                        <th>Kecamatan</th>
                        <th>Kota</th>
                        <th colspan="3" class="text-center">Pilihan</th>

                    </tr>
                </thead>
                <tbody>
                @foreach ($pasien as $pasiens)
                    <tr>
                        <td>{{ $pasiens->id }}</td>
                        <td>{{ $pasiens->idpasien }}</td>
                        <td>{{ $pasiens->nama }}</td>
                        <td>{{ $pasiens->tgl }}</td>
                        <td>{{ $pasiens->jk }}</td>
                        <td>{{ $pasiens->alamat }}</td>
                        <td>{{ $pasiens->nohp }}</td>
                        <td>{{ $pasiens->rtrw }}</td>
                        <td>{{ $pasiens->kel }}</td>
                        <td>{{ $pasiens->kec }}</td>
                        <td>{{ $pasiens->kota }}</td>
                        <td>
                            <a href="{{ url('operator/kartu/'. $pasiens->id) }}" class="btn btn-primary btn-sm">Cetak</a>
                        </td>
                        <td>
                            <a href="{{ url('operator/edit/'. $pasiens->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        </td>
                        <td>
                            <form action="{{ url('operator/delete/'. $pasiens->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                    <button class="btn btn-danger btn-sm">DELETE</button>
                            </form>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div> 
    </div>
    
@endsection