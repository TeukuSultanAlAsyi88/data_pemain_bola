@extends('layouts.app')

@section('content')
    <h2>Detail Pemain</h2>
    <p>Informasi lengkap pemain</p>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>Nama</th>
            <td>{{ $pemain->nama }}</td>
        </tr>
        <tr>
            <th>Posisi</th>
            <td>{{ $pemain->posisi }}</td>
        </tr>
        <tr>
            <th>No Punggung</th>
            <td>{{ $pemain->no_punggung }}</td>
        </tr>
        <tr>
            <th>Negara</th>
            <td>{{ $pemain->negara }}</td>
        </tr>
    </table>

    <p><a href="{{ route('pemain.index') }}">Kembali</a></p>
@endsection
