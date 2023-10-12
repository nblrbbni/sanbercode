@extends('layout.master')

@section('judul')
    <b>Halaman Tambah Cast</b>
@endsection

@section('subjudul')
    Isi form berikut untuk menambahkan cast!
@endsection

@section('content')
<form action="/cast" method="post">
    @csrf
    <div class="mb-3">
      <label>Nama</label>
      <input type="text" name="nama" class="form-control">
    </div>
    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="mb-3">
        <label for="umur">Umur</label>
        <input type="number" class="form-control" id="umur" name="umur" min="0" max="1000" />
    </div>
    @error('umur')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="mb-3">
      <label>Bio</label>
      <textarea name="bio" class="form-control" cols="30" rows="10"></textarea>
    </div>
    @error('bio')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
