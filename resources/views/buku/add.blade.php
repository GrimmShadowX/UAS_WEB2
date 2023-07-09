@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Tambah Data Buku</h3>
    <form action="{{ url('/buku') }}" method="post">
        @csrf
        <table>
            <tr>
                <td>Nomor</td>
                <td><input type="text" name="buku_no" class="form-control"></td>
            </tr>
            <tr>
                <td>Judul</td>
                <td><input type="text" name="buku_judul" class="form-control"></td>
            </tr>
            <tr>
                <td>Penulis</td>
                <td><input type="text" name="buku_penulis" class="form-control"></td>
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
                <td><input type="text" name="buku_tahun" class="form-control"></td>
            </tr>
            <tr>
                <td><input type="submit" value="SIMPAN" class="btn btn-primary"></td>
            </tr>
        </table>
    </form>
</div>
@endsection