@extends('layouts.app')
@section('content')
<div class="container">
    <h3>Daftar Buku</h3>
    <a href="{{ url('buku/create') }}">Tambah Buku</a>
    <form class="form" method="get" action="{{ route('search')}}">
        <div class="form-group w-50 mb-3">
            <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Cari berdasarkan judul">
            <button type="submit" class="btn btn-primary mb-1">Cari</button>
        </div>
    </form>
    <div class="table-responsive">
        <table class="table">
            <tr>
                <th>NO</th>
                <th>JUDUL</th>
                <th>PENULIS</th>
                <th>PENERBIT</th>
                <th>TAHUN</th>
                <th>EDIT</th>
                <th>HAPUS</th>
            </tr>
            @foreach($rows as $row)
            <tr>
                <td>{{ $row->buku_no }}</td>
                <td>{{ $row->buku_judul }}</td>
                <td>{{ $row->buku_penulis }}</td>
                <td>{{ $row->buku_penerbit }}</td>
                <td>{{ $row->buku_tahun }}</td>
                <td><a href="{{ url('buku/' . $row->buku_id . '/edit') }}">Edit</a></td>
                <td>
                    <form action="{{ url('buku/' . $row->buku_id) }}" method="POST">
                        <input name="_method" type="hidden" value="DELETE">
                        @csrf
                        <button class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection