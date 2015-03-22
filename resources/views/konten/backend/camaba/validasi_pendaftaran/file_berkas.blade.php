<h1>Berkas Pendaftaran</h1>
<hr>


<table class='table'>
	<tr>
		<td width='40%'>
			Scan Ijazah
		</td>
		<td>
			@if(file_exists(public_path('upload/berkas/ijazah/'.md5(Auth::user()->email).'.jpg')))
			 <span class='text-success'><i class='fa fa-check'></i> ada </span>
			@else
			 <span class='text-danger'><i class='fa fa-times'></i> belum ada </span>
			@endif
		</td>
	</tr>

	<tr>
		<td width='30%'>
			Surat Keterangan lulus
		</td>
		<td>
			@if(file_exists(public_path('upload/berkas/surat_keterangan_lulus/'.md5(Auth::user()->email).'.jpg')))
			 <span class='text-success'><i class='fa fa-check'></i> ada </span>
			@else
			 <span class='text-danger'><i class='fa fa-times'></i> belum ada </span>
			@endif
		</td>
	</tr>


<tr>
	<td colspan='2'>
		<div class='alert alert-warning'>
			Surat keterangan lulus wajib ada jika ijazah belum keluar! <br>
			dan jika sudah ada ijazah, maka tidak perlu upload surat keterangan lulus.
		</div>
	</td>
</tr>


</table>