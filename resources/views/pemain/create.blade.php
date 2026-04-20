@extends('layouts.app')

@section('content')
    <div class="page-header">
        <div>
            <h2>Tambah Pemain</h2>
            <p>Isi data pemain baru</p>
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

    <form action="{{ route('pemain.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" value="{{ old('nama') }}">
        </div>

        <div class="form-group">
            <label>Posisi</label>
            <input type="text" name="posisi" value="{{ old('posisi') }}">
        </div>

        <div class="form-group">
            <label>No Punggung</label>
            <input type="number" name="no_punggung" value="{{ old('no_punggung') }}">
        </div>

        <div class="form-group">
            <label>Negara</label>
            <input type="text" name="negara" value="{{ old('negara') }}">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('pemain.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection