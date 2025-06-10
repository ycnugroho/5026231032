<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenggarisController extends Controller
{
    public function index()
    {
        $penggaris = DB::table('penggaris')->paginate(10);
        return view('penggaris.index', ['penggaris' => $penggaris]);
    }

    public function tambah()
    {
        return view('penggaris.tambah');
    }

    public function store(Request $request)
    {
        DB::table('penggaris')->insert([
            'merkpenggaris' => $request->merk,
            'hargapenggaris' => $request->harga,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);
        return redirect('/latihan1');
    }

    public function edit($id)
    {
        $penggaris = DB::table('penggaris')->where('id', $id)->get();
        return view('penggaris.edit', ['penggaris' => $penggaris]);
    }

    public function update(Request $request)
    {
    DB::table('penggaris')->where('id', $request->id)->update([
        'merkpenggaris' => $request->merkpenggaris,
        'hargapenggaris' => $request->hargapenggaris,
        'tersedia' => $request->tersedia,
        'berat' => $request->berat
    ]);

    return redirect('/latihan1');
    }


    public function hapus($id)
    {
        DB::table('penggaris')->where('id', $id)->delete();
        return redirect('/latihan1');
    }
}
