<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th width="15px" class="text-center">No.</th>
			<th>Nama File</th>
			<th class="text-center" width="80px" >Download</th>
			<th width="5%">Action</th>
		</tr>
	</thead>
	<tbody>
<?php $no= $daftar_file->firstItem(); ?>
@foreach($daftar_file as $list)
		<tr>
			<td class="text-center">{!! $no !!}</td>
			<td>{!! $list->nama !!}</td>
			<td class="text-center">{!! Fungsi::restyle_text($list->jml_download) !!}</td>
			<td>
				<?php
		        $id = $hashids->encode(1000, 2000, $list->id);
		        ?>

		        <a class='label bg-yellow' target='__blank' href="{!! URL::route('berita.download_lampiran', $id) !!}">
		           <i class='fa fa-cloud-download'></i> download</a>  


			</td>
		</tr>
		<?php $no++; ?>
@endforeach
	</tbody>
</table>

{!! $daftar_file->render() !!}