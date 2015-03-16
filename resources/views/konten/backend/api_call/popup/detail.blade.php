<h2>Detail API Call</h2>
<hr>


<table class="table table-bordered table-hover">
	<tr>
		<td>Nama Api Akses</td>
		<td>{!! $data->nama !!}</td>
	</tr>


	<tr>
		<td>IP</td>
		<td>{!! $data->ip !!}</td>
	</tr>

	<tr>
		<td>Result</td>
		<td>{!! $data->result !!}</td>
	</tr>

	<tr>
		<td>Tgl Akses</td>
		<td>{!! Fungsi::date_to_tgl(date('Y-m-d', strtotime($data->created_at))) !!}</td>
	</tr>

	<tr>
		<td>Jam Akses</td>
		<td>{!! date('H:i:s', strtotime($data->created_at)) !!}</td>
	</tr>

</table>