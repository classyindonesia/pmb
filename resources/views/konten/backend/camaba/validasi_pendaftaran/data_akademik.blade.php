<h3>Data Akademik</h3>

<hr>

<table class='table'>
	<tr>
		<td width='30%'>Tahun Kelulusan</td>
		<td>{!! $b->thn_lulus !!}</td>
	</tr>
 
	<tr>
		<td>Nomor Ijazah</td>
		<td>{!! $b->no_ijazah !!}</td>
	</tr>


	<tr>
		<td>Asal Sekolah</td>
		<td> @if(count($b->ref_sma)>0) {!! $b->ref_sma->nama !!} @else - @endif </td>
	</tr>


	<tr>
		<td>Prodi pilihan pertama</td>
		<td> @if(count($b->ref_prodi1)>0) {!! $b->ref_prodi1->nama !!} @else - @endif </td>
	</tr>


	<tr>
		<td>Prodi pilihan kedua</td>
		<td> @if(count($b->ref_prodi2)>0) {!! $b->ref_prodi2->nama !!} @else - @endif </td>
	</tr>


</table>

