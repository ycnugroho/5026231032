@extends('template')

@section('content')
    <a href="/penggaris/tambah" class="btn btn-success mb-2">+ Tambah Penggaris</a>
    <table class="table table-bordered">
        <tr>
            <th>Merk</th>
            <th>Harga</th>
            <th>Tersedia</th>
            <th>Berat (gr)</th>
            <th>Opsi</th>
        </tr>
        @foreach($penggaris as $p)
        <tr>
            <td>{{ $p->merkpenggaris }}</td>
            <td>{{ $p->hargapenggaris }}</td>
            <td>{{ $p->tersedia ? 'Ya' : 'Tidak' }}</td>
            <td>{{ $p->berat }}</td>
            <td>
                <a href="/penggaris/edit/{{ $p->id }}" class="btn btn-warning btn-sm">Edit</a>
                <a href="/penggaris/hapus/{{ $p->id }}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin?')">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>

    {{ $penggaris->links() }}
@endsection
