<!-- Menghubungkan dengan view template master -->
@extends('blog/master')

@section('title','Halaman Blog')
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Home')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

	<p>Ini Adalah Halaman Home</p>
	<p>Selamat datang !</p>

@endsection

@section('footer')
<p><i class="fa fa-copyright" aria-hidden="true"></i>Copyright by Yokanan Prawira Nugroho 2025</p>
@endsection
