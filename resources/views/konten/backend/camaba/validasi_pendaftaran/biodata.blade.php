<h3>Biodata</h3>

<hr>

<table class='table'>
	<tr>
		<td width='30%'>Nama</td>
		<td>{!! $b->nama !!}</td>
	</tr>

	<tr>
		<td>Alamat</td>
		<td>{!! $b->alamat !!}</td>
	</tr>

	<tr>
		<td>TTL</td>
		<td>{!! $b->tempat_lahir.', '.Fungsi::date_to_tgl(date('Y-m-d', strtotime($b->tgl_lahir))) !!}</td>
	</tr>

	<tr>
		<td>Jenis Kelamin</td>
		<td> @if($b->jenis_kelamin == 'L') Laki-laki @else Perempuan @endif </td>
	</tr>

	<tr>
		<td>Nomor HP</td>
		<td>  {!! $b->no_hp !!} </td>
	</tr>


	<tr>
		<td>Alamat Email</td>
		<td>  {!! $b->alamat_email !!} </td>
	</tr>




</table>

