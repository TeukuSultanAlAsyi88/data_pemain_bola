@extends('layouts.app')

@section('content')
    <div class="page-header">
        <div>
            <h2>Detail Pemain</h2>
            <p>Informasi lengkap pemain</p>
        </div>
    </div>

    <div class="detail-box">
        <div class="detail-item">
            <h4>Nama</h4>
            <p>{{ $pemain->nama }}</p>
        </div>

        <div class="detail-item">
            <h4>Posisi</h4>
            <p>{{ $pemain->posisi }}</p>
        </div>

        <div class="detail-item">
            <h4>No Punggung</h4>
            <p>{{ $pemain->no_punggung }}</p>
        </div>

        <div class="detail-item">
            <h4>Negara</h4>
            <p>{{ $pemain->negara }}</p>
        </div>
    </div>

    <br>
    <a href="{{ route('pemain.index') }}" class="btn btn-secondary">Kembali</a>
@endsection