@extends('layout.main')
@section('title', 'Daftar Mahasiswa')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h2 class="my-4">Daftar Mahasiswa</h2>

                <table class="table table-bordered table-hover" >
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NRP</th>
                            <th>Email</th>
                            <th>Jurusan</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($mahasiswa as $value)

                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$value->nama}}</td>
                            <td>{{$value->nrp}}</td>
                            <td>{{$value->email}}</td>
                            <td>{{$value->jurusan}}</td>
                            <td>
                                <a href="" class="badge badge-warning">Ubah</a>
                                <a href="" class="badge badge-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
