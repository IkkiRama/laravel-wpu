@extends('layout.main')
@section('title', 'Siswa')



@section('container')
    <div class="container mt-4">
        <h2 class="mb-3">Daftar Siswa</h2>

        @if(session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
        @endif

        <a href="{{url('/siswa/tambah')}}" class="btn mb-3 btn-primary">Tambah Siswa</a>
        <ul class="list-group">
            @foreach($siswa as $value)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$value->nama}}
                    <a href="{{url("/siswa/$value->id")}}" class="badge badge-info">Detail</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
