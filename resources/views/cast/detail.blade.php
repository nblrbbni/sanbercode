@extends('layout.master')

@section('judul')
    <b>Detail Cast</b>
@endsection

@section('subjudul')
    Detail Cast
@endsection

@section('content')
    <h1>{{ $cast->nama }}</h1>
    <p>{{ $cast->umur }} tahun</p>
    <p>{{ $cast->bio }}</p>

    <a href="/cast" class="btn btn-secondary btn-sm">Kembali</a>
@endsection
