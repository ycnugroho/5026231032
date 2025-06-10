@extends('template')

@section('content')
    <h3>Data Penggaris</h3>
    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Merk Penggaris</th>
                <th>Harga</th>
                <th>Tersedia</th>
                <th>Berat (gram)</th>
            </tr>
        </thead>
        <tbody>
            @foreach($penggaris as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->merkpenggaris }}</td>
                <td>{{ $p->hargapenggaris }}</td>
                <td>{{ $p->tersedia ? 'Ya' : 'Tidak' }}</td>
                <td>{{ $p->berat }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
