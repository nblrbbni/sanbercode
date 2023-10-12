@extends('layout.master')

@section('judul')
    <b>Halaman List Cast</b>
@endsection

@section('subjudul')
    Halaman List Cast
@endsection

@section('content')
    <a href="/cast/create" class="btn btn-primary btn-sm mb-3">Tambah</a>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Umur</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($cast as $key => $value)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $value->nama }}</td>
                    <td>{{ $value->umur }}</td>
                    <td>
                        <a href="/cast/{{ $value->id }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="/cast/{{ $value->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>Tidak ada data</td>
                </tr>
            @endforelse
        </tbody>
      </table>
@endsection
