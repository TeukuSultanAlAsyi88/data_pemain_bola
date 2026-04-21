@extends('layouts.app')

@section('content')
    <h2>Tambah Pemain</h2>
    <p>Isi data pemain baru</p>

    @if($errors->any())
        <p><strong>Terjadi kesalahan:</strong></p>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('pemain.store') }}" method="POST">
        @csrf

        <p>
            <label>Nama</label><br>
            <input type="text" name="nama" value="{{ old('nama') }}">
        </p>

        <p>
            <label>Posisi</label><br>
            <input type="text" name="posisi" value="{{ old('posisi') }}">
        </p>

        <p>
            <label>No Punggung</label><br>
            <input type="number" name="no_punggung" value="{{ old('no_punggung') }}">
        </p>

        <p>
            <label>Negara</label><br>
            <input type="text" name="negara" value="{{ old('negara') }}">
        </p>

        <button type="submit">Simpan</button>
        <a href="{{ route('pemain.index') }}">Kembali</a>
    </form>
@endsection
