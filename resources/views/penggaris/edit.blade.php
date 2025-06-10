@extends('template')

@section('content')
    @foreach($penggaris as $p)
    <form action="/penggaris/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->id }}">
        <div class="form-group">
            <label>Merk</label>
            <input type="text" name="merkpenggaris" class="form-control" value="{{ $p->merkpenggaris }}">
        </div>
        <div class="form-group">
            <label>Harga</label>
            <input type="number" name="hargapenggaris" class="form-control" value="{{ $p->hargapenggaris }}">
        </div>
        <div class="form-group">
            <label>Tersedia</label>
            <select name="tersedia" class="form-control">
                <option value="1" {{ $p->tersedia ? 'selected' : '' }}>Ya</option>
                <option value="0" {{ !$p->tersedia ? 'selected' : '' }}>Tidak</option>
            </select>
        </div>
        <div class="form-group">
            <label>Berat (gr)</label>
            <input type="text" name="berat" class="form-control" value="{{ $p->berat }}">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
    @endforeach
@endsection
