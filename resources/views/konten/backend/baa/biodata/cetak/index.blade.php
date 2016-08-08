<style type="text/css">
.header_text_top{
	margin-top: -5px;
	margin-bottom: 2px;
}
.logo{
	width: 60px;
	height: 60px;
	margin-bottom: 1em;
	margin-left: 5em;
	}

</style>

 


@include($base_view.'cetak.komponen.header')
@include($base_view.'cetak.komponen.data_identitas_diri')
@include($base_view.'cetak.komponen.data_keluarga')
@include($base_view.'cetak.komponen.data_akademik')
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div style="text-align:center">
	<h4 style="padding-top:5em;">Validasi Data Diri dan Pernyataan Kesanggupan</h4>	
</div>

 


Yang bertanda tangan di bawah ini: <br>
<table style="margin-top:3em;margin-bottom: 3em;">
	<tr>
		<td width="150px">NPM</td>
		<td width="10px">:</td>
		<td>{{ $b->fk__validasi_biodata_npm }}</td>
	</tr>
	<tr>
		<td width="150px">Nama</td>
		<td width="10px">:</td>
		<td>{{ $b->nama }}</td>
	</tr>
	<tr>
		<td width="150px">TTL</td>
		<td width="10px">:</td>
		<td>{{ $b->tempat_lahir.', '.Fungsi::date_to_tgl($b->tgl_lahir) }}</td>
	</tr>
 	<tr>
		<td width="150px">Alamat</td>
		<td width="10px">:</td>
		<td>{!! $b->alamat !!}</td>
	</tr>
 	<tr>
		<td width="150px">No HP</td>
		<td width="10px">:</td>
		<td>{!! $b->no_hp !!}</td>
	</tr>
 	<tr>
		<td width="150px">Nama Ayah</td>
		<td width="10px">:</td>
		<td>{!! $b->nama_ortu_ayah !!}</td>
	</tr>
 	<tr>
		<td width="150px">Nama Ibu</td>
		<td width="10px">:</td>
		<td>{!! $b->nama_ortu_ibu !!}</td>
	</tr>                      

</table>


Menyatakan bahwa data tersebut BENAR dan dapat dipergunakan untuk data administrasi akademik.
Setelah dinyatakan diterima sebagai mahasiswa Universitas Nusantara PGRI Kediri tahun akademik 2016-2017 dengan penuh kesadaran dan tanggung jawab menyatakan sebagai berikut.
<ol>
	<li>
		Tunduk dan patuh terhadap semua perundang-undangan serta ketentuan Negara Kesatuan Republik Indonesia.		
	</li>
	<li>
		Bersedia mematuhi norma, etika, tata krama, peraturan, dan ketentuan yang berlaku di Universitas Nusantara PGRI Kediri.		
	</li>
	<li>
		Bersedia mengetahui, memahami dan menaati ketentuan-ketentuan yang tertuang di dalam Peraturan akademik dan pedoman akademik.		
	</li>
	<li>
		Berupaya dengan kesungguhan hati memajukan dan menjaga integritas almamater. 
		Apabila saya tidak menaati pernyataan ini saya sanggup menerima sanksi sesuai dengan ketentuan yang berlaku.		
	</li>
</ol>
Kediri {{ Fungsi::date_to_tgl(date('Y-m-d', strtotime($b->created_at))) }} , Orang tua/Wali

@include($base_view.'cetak.komponen.footer')