@extends('layouts.app')
@section('content')
<div class="container">
    <h3>Edit Data Buku</h3>
    <form action="{{ url('/buku/' . $row->buku_id) }}" method="POST">
        <input name="_method" type="hidden" value="PATCH"> 
        @csrf
        <table class="table">
            <tr>
                <td>Nomor</td> 
                <td><input type="text" name="buku_no" value="{{ $row->buku_no }}"></td>
            </tr>
            <tr>
                <td>Judul</td>
                <td><input type="text" name="buku_judul" value="{{ $row->buku_judul }}"></td>
            </tr>
            <tr>
                <td>Penulis</td>
                <td><input type="text" name="buku_penulis" value="{{ $row->buku_penulis }}"></td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td>
                    <select name="buku_penerbit" class="form-control">
                        <option value="">-- Pilih Penerbit --</option>
                        <option value="Aqwam Jembatan Ilmu">Aqwam Jembatan Ilmu</option>
                        <option value="Erlangga">Erlangga</option>
                        <option value="Tiga Serangkai">Tiga Serangkai</option>
                    </select>
                </td>
            </tr>
            <tr>
            <td>Tahun</td>
                <td><input type="text" name="buku_tahun" value="{{ $row->buku_tahun }}"></td>
            </tr>
            <tr>
                <td></td> 
                <td><input type="submit" value="UPDATE" class="btn btn-primary"></td>
            </tr>
        </table>
    </form>
</div> 
@endsection