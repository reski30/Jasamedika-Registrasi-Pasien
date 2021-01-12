@extends('admin.dashboard')

@section('main')


<div class="row">
    <div class="col-md-12">
        <h3 class="display-6 mb-4">Ubah Data Pasien</h3>

        <form action="{{ url("/operator/{$pasien->id}")  }}" method="post">
            <!--di ambil dari halaman route:post  -->
            @method('PATCH')
            @csrf
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="full_name">Nama Lengkap :</label>
                        <input value="{{ old('nama', $pasien->nama) }}" id="" class="form-control" type="text" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="phone">Tanggal Lahir :</label>
                        <input value="{{ old('tgl', $pasien->tgl) }}" id="" class="form-control" type="text" name="tgl">
                    </div>
                    <div class="form-group">
                        <label for="email">Jenis Kelamin :</label>
                        <input value="{{ old('jk', $pasien->jk) }}" id="" class="form-control" type="text" name="jk">
                    </div>
                    <div class="form-group">
                        <label for="email">Alamat :</label>
                        <input value="{{ old('alamat', $pasien->alamat) }}" id="" class="form-control" type="text" name="alamat">
                    </div>
                    <div class="form-group">
                        <label for="email">No.Handphone :</label>
                        <input value="{{ old('nohp', $pasien->nohp) }}" id="" class="form-control" type="text" name="nohp">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="email">RT / RW :</label>
                        <input value="{{ old('rtrw', $pasien->rtrw) }}" id="" class="form-control" type="text" name="rtrw">
                    </div>
                    <div class="form-group">
                        <label for="email">Kelurahan :</label>
                        <input value="{{ old('kel', $pasien->kel) }}" id="" class="form-control" type="text" name="kel">
                    </div>
                    <div class="form-group">
                        <label for="email">Kecamatan :</label>
                        <input value="{{ old('kec', $pasien->kec) }}" id="" class="form-control" type="text" name="kec">
                    </div>
                    <div class="form-group">
                        <label for="email">Kota :</label>
                        <input value="{{ old('kota', $pasien->kota) }}" id="" class="form-control" type="text" name="kota">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Ubah Data</button>
                </div>
            </div>
        </form>
    </div>
</div>


@endsection