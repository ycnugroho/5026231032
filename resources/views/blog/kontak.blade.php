<!-- Menghubungkan dengan view template master -->
@extends('blog/master')

@section('title','Halaman Blog')
<!-- Isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Kontak')


<!-- Isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

	<p>Ini Adalah Halaman Kontak</p>

	<table border="1">
		<tr>
			<td>Email</td>
			<td>:</td>
			<td>malasngoding@gmail.com</td>
		</tr>
		<tr>
			<td>Hp</td>
			<td>:</td>
			<td>0896-0676-7404</td>
		</tr>
	</table>

@endsection

@section('footer')
<p><i class="fa fa-copyright" aria-hidden="true"></i>Copyright by Yokanan Prawira Nugroho 2025</p>
@endsection
