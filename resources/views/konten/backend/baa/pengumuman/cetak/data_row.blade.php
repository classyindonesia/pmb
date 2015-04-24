	<tr>
		<td>{!! $no !!}</td>
		<td> @if(count($list->mst_pendaftaran)>0) 
				{!! $list->mst_pendaftaran->no_pendaftaran !!}
			@else
				-
			@endif
		</td>
		<td> @if(count($list->mst_pendaftaran)>0) 
				{!! $list->mst_pendaftaran->nama !!}
			@else
				-
			@endif
		</td>

		<td> @if(count($list->ref_prodi)>0) 
				{!! $list->ref_prodi->kode_prodi !!}
			@else
				-
			@endif
		</td>

		<td> @if(count($list->ref_prodi)>0) 
				{!! $list->ref_prodi->nama !!}
			@else
				-
			@endif
		</td>
 
		
	</tr>

	