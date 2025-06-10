@extends('template')

@section('content')
    <form action="/penggaris/store" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Merk</label>
            <input type="text" name="merk" class="form-control">
        </div>
        <div class="form-group">
            <label>Harga</label>
            <input type="number" name="harga" class="form-control">
        </div>
        <div class="form-group">
            <label>Tersedia</label>
            <select name="tersedia" class="form-control">
                <option value="1">Ya</option>
                <option value="0">Tidak</option>
            </select>
        </div>
        <div class="form-group">
            <label>Berat</label>
            <input type="text" name="berat" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
