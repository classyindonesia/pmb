<h4 style="margin-bottom:1px;">DATA AKADEMIK</h4>
<hr style="margin-top:1px;margin-bottom:1px;"> 



<table width="100%">
 
	<tr>
		<td width="30%">
	Asal Sekolah		
		</td>
		<td>
			@if(count($b->ref_sma)>0)
				{!! $b->ref_sma->nama !!}
			@else
				-
			@endif
		</td>
	</tr>

 
	<tr>
		<td>
	Nomor Ijazah		
		</td>
		<td>
			{!! $b->no_ijazah !!}		 
		</td>
	</tr>

	<tr>
		<td>
	Tahun Kelulusan		
		</td>
		<td>
			{!! $b->tahun_lulus !!}		 
		</td>
	</tr>



	<tr>
		<td>
	Alamat Sekolah		
		</td>
		<td>
			{!! $b->alamat_sekolah !!}		 
		</td>
	</tr>



</table>

