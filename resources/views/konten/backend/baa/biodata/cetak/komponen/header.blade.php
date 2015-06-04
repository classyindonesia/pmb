@if($b->jenis_pendaftaran == 'sma')
	<img src="/img/br.jpg" style="width:100px;height:30px;float:right" >
@else
	<img src="/img/transfer.jpg" style="width:120px;height:30px;float:right" >
@endif




<div style="text-align:center">
	<img src="/logo-unp.jpg" class="logo">
	<h4 class="header_text_top">UNIVERSITAS NUSANTARA PGRI KEDIRI</h4>
	<h4 class="header_text_top">VALIDASI BIODATA MAHASISWA BARU</h4>
	
</div>

<hr>

Berikut ini adalah hasil pengisian formulir pendaftaran yang telah difinalisasi pada tanggal 
{!! Fungsi::date_to_tgl(date('Y-m-d', strtotime($b->updated_at))) !!}
pada pukul {!! date("H:i:s", strtotime($b->updated_at)) !!} WIB
<hr>