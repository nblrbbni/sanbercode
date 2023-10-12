@extends('layout.master')

@section('judul')
    <b>Halaman Edit Cast</b>
@endsection

@section('subjudul')
    Halaman Edit Cast
@endsection

@section('content')
<form action="/cast/{{ $cast->id }}" method="post">
    @csrf
    @method('put')
    <div class="mb-3">
      <label>Nama</label>
      <input type="text" name="nama" value="{{ $cast->nama }}" class="form-control">
    </div>
    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="mb-3">
        <label for="umur">Umur</label>
        <input type="number" value="{{ $cast->umur }}"  class="form-control" id="umur" name="umur" min="0" max="1000" />
    </div>
    @error('umur')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="mb-3">
      <label>Bio</label>
      <textarea name="bio" class="form-control" cols="30" rows="10">{{ $cast->bio }}</textarea>
    </div>
    @error('bio')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
