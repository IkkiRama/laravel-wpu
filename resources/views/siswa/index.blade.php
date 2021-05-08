@extends('layout.main')
@section('title', 'Siswa')



@section('container')
    <div class="container mt-5">
        <ul class="list-group">
            @foreach($siswa as $value)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$value->nama}}
                    <a href="" class="badge badge-info">Detail</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
