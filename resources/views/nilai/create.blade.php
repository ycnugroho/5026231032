@extends('template')

@section('content')
    <h2>Tambah Data Nilai</h2>

    <form action="/eas/store" method="POST">
        @csrf
        <div class="form-group row">
            <label for="normorinduksiswa" class="col-sm-2 col-form-label">Nomor Induk Siswa</label>
            <div class="col-sm-10">
                <input type="text" name="normorinduksiswa" id="normorinduksiswa" class="form-control" required maxlength="5">
            </div>
        </div>

        <div class="form-group row">
            <label for="nilaiangka" class="col-sm-2 col-form-label">Nilai Angka</label>
            <div class="col-sm-10">
                <input type="number" name="nilaiangka" id="nilaiangka" class="form-control" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="sks" class="col-sm-2 col-form-label">SKS</label>
            <div class="col-sm-10">
                <input type="number" name="sks" id="sks" class="form-control" required>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-success">SIMPAN</button>
                <a href="/eas" class="btn btn-secondary">BATAL</a>
            </div>
        </div>
    </form>
@endsection
