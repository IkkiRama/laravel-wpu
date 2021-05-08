@extends('layout.main')
@section('title', 'Edit Siswa')



@section('container')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="my-3">Form Edit Siswa</h1>


                <form action="{{url("/siswa/$siswa->id")}}" method="post">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" id="nama" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{$siswa->nama}}">

                        @error('nama') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>

                    <div class="form-group">
                        <label for="nrp">NRP</label>
                        <input type="number" id="nrp" name="nrp" class="form-control @error('nrp') is-invalid @enderror" value="{{$siswa->nrp}}">

                        @error('nrp') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>


                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{$siswa->email}}">

                        @error('email') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>


                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" id="jurusan" name="jurusan" class="form-control @error('jurusan') is-invalid @enderror" value="{{$siswa->jurusan}}">

                        @error('jurusan') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>


                    <button class="btn btn-warning">Edit</button>

                </form>
            </div>
        </div>
    </div>
@endsection
