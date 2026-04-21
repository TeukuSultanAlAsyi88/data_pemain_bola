@extends('layouts.app')

@section('content')
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <h2>Daftar Pemain</h2>
    <p>Data pemain bola</p>

    <p><a href="{{ route('pemain.create') }}">Tambah Pemain</a></p>

    <table border="1" cellpadding="8" cellspacing="0">
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
                        <a href="{{ route('pemain.show', $item->id) }}">Detail</a>
                        <a href="{{ route('pemain.edit', $item->id) }}">Edit</a>
                        <form action="{{ route('pemain.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin hapus data ini?')" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">Belum ada data pemain</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
