<div class="col-md-6">

 
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title"><i class='fa fa-info'></i> Pengumuman</h3>
  </div>
  <div class="panel-body">


	<table width="100%">
 
		<tr>
			<td width="50%">No Pendaftaran</td>
			<td> {!! $pendaftaran->no_pendaftaran !!}</td>
		</tr>
		<tr>
			<td>Nama</td>
			<td> {!! $pendaftaran->nama !!}</td>
		</tr>		
		<tr>		
			<td>Prodi diterima</td>
			<td>@if(count($pengumuman)>0) {!! $pengumuman->ref_prodi->nama !!} @else {!! $blm_tersedia !!} @endif </td>
		</tr>

 

	</table>	


  </div>
</div>
 
</div>