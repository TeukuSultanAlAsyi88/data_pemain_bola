@extends('layouts.app')

@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="page-header">
        <div>
            <h2>Daftar Pemain</h2>
            <p>Data pemain bola</p>
        </div>
        <a href="{{ route('pemain.create') }}" class="btn btn-primary">+ Tambah Pemain</a>
    </div>

    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Posisi</th>
                    <th>No Punggung</th>
                    <th>Negara</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($pemain as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->posisi }}</td>
                        <td>{{ $item->no_punggung }}</td>
                        <td>{{ $item->negara }}</td>
                        <td>
                            <div class="action-buttons">
                                <a href="{{ route('pemain.show', $item->id) }}" class="btn btn-success">Detail</a>
                                <a href="{{ route('pemain.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('pemain.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin hapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="empty-state">Belum ada data pemain</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection