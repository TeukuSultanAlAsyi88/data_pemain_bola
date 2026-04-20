@extends('layouts.app')

@section('content')
    <div class="page-header">
        <div>
            <h2>Edit Pemain</h2>
            <p>Ubah data pemain</p>
        </div>
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
            <strong>Terjadi kesalahan:</strong>
            <ul class="error-list">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pemain.update', $pemain->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" value="{{ old('nama', $pemain->nama) }}">
        </div>

        <div class="form-group">
            <label>Posisi</label>
            <input type="text" name="posisi" value="{{ old('posisi', $pemain->posisi) }}">
        </div>

        <div class="form-group">
            <label>No Punggung</label>
            <input type="number" name="no_punggung" value="{{ old('no_punggung', $pemain->no_punggung) }}">
        </div>

        <div class="form-group">
            <label>Negara</label>
            <input type="text" name="negara" value="{{ old('negara', $pemain->negara) }}">
        </div>

        <button type="submit" class="btn btn-warning">Update</button>
        <a href="{{ route('pemain.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection