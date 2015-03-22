<html>
<head>
	<title>Kartu Pendaftaran</title>

<link rel="stylesheet" href="{{ elixir("css/main.css") }}">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style type="text/css">
	.biodata_kiri tr td{
		border-top: 1px solid #aaa;
		padding-bottom: 5px;
	}
	.tabel_global{
		margin-top:3em;
	}
</style>
</head>
<body>


<table width='100%'>
	<tr>
		<td width="40%">
			<h3 style="font-weight:bold;">KARTU PENDAFTARAN</h3>
			<h4>CALON MAHASISWA BARU</h4>
			<b>Tahun Akademik {!! $thn_akademik !!}</b>				
		</td>
		<td width="50%">
			<img src="/logo-unp.jpg" class="text-center" width='150px;height:150px;'>
		</td>
		<td>
		{!! str_replace('<?xml version="1.0" encoding="UTF-8"?>', '', QrCode::size(100)->generate($b->no_pendaftaran) ) !!} 		


		</td>
	</tr>
</table>
<hr>
 


<table class="tabel_global"   width="100%">
	<tr>
		<td width="40%">
			@include($base_view.'cetak.biodata_kiri')
		</td>
		<td width="40%"><br></td>

		<td valign="top">
			@include($base_view.'cetak.biodata_kanan')
		</td>

	</tr>
</table> 



</body>
</html>