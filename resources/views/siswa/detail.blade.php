@extends('layout.main')
@section('title', 'Detail Siswa')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="my-3">Detail Siswa</h1>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$siswa->nama}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$siswa->jurusan}}</h6>
                        <p class="card-text" style="margin:0;">{{$siswa->email}}</p>
                        <p class="card-text">{{$siswa->nrp}}</p>
                        <a href="#" class="card-link btn btn-warning">Ubah</a>
                        <a href="#" class="card-link btn btn-danger">Hapus</a>
                        <a href="{{url('/siswa')}}" class="card-link btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
