@extends('layouts.app')

@section('content')
    <h2>Edit Pemain</h2>
    <p>Ubah data pemain</p>

    @if($errors->any())
        <p><strong>Terjadi kesalahan:</strong></p>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('pemain.update', $pemain->id) }}" method="POST">
        @csrf
        @method('PUT')

        <p>
            <label>Nama</label><br>
            <input type="text" name="nama" value="{{ old('nama', $pemain->nama) }}">
        </p>

        <p>
            <label>Posisi</label><br>
            <input type="text" name="posisi" value="{{ old('posisi', $pemain->posisi) }}">
        </p>

        <p>
            <label>No Punggung</label><br>
            <input type="number" name="no_punggung" value="{{ old('no_punggung', $pemain->no_punggung) }}">
        </p>

        <p>
            <label>Negara</label><br>
            <input type="text" name="negara" value="{{ old('negara', $pemain->negara) }}">
        </p>

        <button type="submit">Update</button>
        <a href="{{ route('pemain.index') }}">Kembali</a>
    </form>
@endsection
