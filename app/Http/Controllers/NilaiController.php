<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nilai;


class NilaiController extends Controller
{
    public function index()
    {
        $data = Nilai::all();
        return view('nilai.index', compact('data'));
    }

    public function create()
    {
        return view('nilai.create');
    }

    public function store(Request $request)
    {
        $request->validate([
        'nomorinduksiswa' => 'required|max:5',
        'nilaiangka' => 'required|integer',
        'sks' => 'required|integer',
    ]);

    Nilai::create([
            'normorinduksiswa' => $request->normorinduksiswa,
            'nilaiangka' => $request->nilaiangka,
            'sks' => $request->sks,
]);
    return redirect('/eas');
    }

}
