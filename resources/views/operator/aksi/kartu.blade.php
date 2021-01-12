@extends('operator.dashboard')

@section('main')

<div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card border-dark mb-3" style="max-width: 2000px;">
                    <div class="card-header text-center">
                        <h2><b>Kartu Pasien JasaMedika</b></h2>
                        <p>Jl. Cipta Karya Desa Sialangmunggu No.05 Pekanbaru Telp. (0752) 46432</p>
                    </div>
                    <div class="card-body text-dark">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-4">
                                        <p class="card-text">ID</p>
                                        <p class="card-text">Nama</p>
                                        <p class="card-text">Tanggal Lahir</p>
                                        <p class="card-text">Jenis Kelamin</p>
                                        <p class="card-text">Alamat</p>
                                        <p class="card-text">Telepon</p>
                                        <p class="card-text">Tanggal Daftar</p>
                                    </div>
                                    <div class="col-md-1">
                                        <p class="card-text">:</p>
                                        <p class="card-text">:</p>
                                        <p class="card-text">:</p>
                                        <p class="card-text">:</p>
                                        <p class="card-text">:</p>
                                        <p class="card-text">:</p>
                                        <p class="card-text">:</p>
                                    </div>
                                    <div class="col-md-7">
                                        <p class="card-text">{{ $pasien->idpasien }}</p>
                                        <p class="card-text">{{ $pasien->nama }}</p>
                                        <p class="card-text">{{ $pasien->tgl }}</p>
                                        <p class="card-text">{{ $pasien->jk }}</p>
                                        <p class="card-text">{{ $pasien->alamat }} {{ $pasien->rtrw }} {{ $pasien->kel }} {{ $pasien->kec }} {{ $pasien->kota }}</p>
                                        <p class="card-text">{{ $pasien->nohp }}</p>
                                        <p class="card-text">{{ $pasien->created_at }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 text-center">
                                <img src="{{ asset('assets/dist/img/avatar5.png') }}" class="card-img mb-2 mt-3" alt="">
                                <p>Seumur Hidup</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <a href="{{ url('operator/'. $pasien->id) }}" class='btn btn-success btn-block'>Print</a>
            </div>
        </div>
    </div>

@endsection

