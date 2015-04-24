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
		<td> @if(count($list->ref_ruang)>0) 
				{!! $list->ref_ruang->kode_ruang !!}
			@else
				-
			@endif
		</td>
		<td> @if(count($list->ref_ruang)>0) 
				{!! $list->ref_ruang->nama !!}
			@else
				-
			@endif
		</td>

		<td> @if(count($list->ref_tes_skill)>0) 
				{!! $list->ref_tes_skill->nama !!}
			@else
				-
			@endif
		</td>
		
	</tr>

	