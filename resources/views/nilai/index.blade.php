@extends('template')

@section('content')
    <h2>Daftar Nilai</h2>
    <a href="/eas/tambah" class="btn btn-primary mb-3">Tambah Data</a>

    <table class="table  table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>NRP</th>
                <th>Nilai Angka</th>
                <th>SKS</th>
                <th>Nilai Huruf</th>
                <th>Bobot</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $n)
            <tr>
                <td>{{$n->id}}</td>
                <td>{{$n->nomorinduksiswa}}</td>
                <td>{{$n->nilaiangka}}</td>
                <td>{{$n->sks}}</td>
                <td>
                    @if ($n->nilaiangka <=40)
                        D
                    @elseif ($n->nilaiangka <=60)
                        C
                    @elseif ($n->nilaiangka <=80)
                        B
                    @else
                        A
                    @endif
                </td>
                <td>{{$n->nilaiangka * $n->sks}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection



