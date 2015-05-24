<h4 style="margin-bottom:1px;">DATA KELUARGA</h4>
<hr style="margin-top:1px;margin-bottom:1px;"> 



<table width="100%">


	<tr>
		<td colspan="2" style="font-weight:bold;">
	Ayah : 		
		</td>
 
	</tr>

	<tr>
		<td width="30%" style="padding-left:1em;">
	Nama			
		</td>
		<td>
			{!! $b->nama_ortu_ayah !!}
		</td>
	</tr>
	
	<tr>
		<td style="padding-left:1em;">
	Pekerjaan			
		</td>
		<td>
			 @if(count($b->ref_pekerjaan_ortu_ayah)>0)
			 	{!! $b->ref_pekerjaan_ortu_ayah->nama !!}
			 @else
			 	-
			 @endif
		</td>
	</tr>



	<tr>
		<td colspan="2" style="font-weight:bold;">
	Ibu : 		
		</td>
 
	</tr>

	<tr>
		<td width="30%" style="padding-left:1em;">
	Nama			
		</td>
		<td>
			{!! $b->nama_ortu_ibu !!}
		</td>
	</tr>
	
	<tr>
		<td style="padding-left:1em;">
	Pekerjaan			
		</td>
		<td>
			 @if(count($b->ref_pekerjaan_ortu_ibu)>0)
			 	{!! $b->ref_pekerjaan_ortu_ibu->nama !!}
			 @else
			 	-
			 @endif
		</td>
	</tr>
 

</table>



<hr style="margin-top:0px;margin-bottom:0px;">


<table width="100%">
 	<tr>
		<td width="30%">
	Alamat			
		</td>
		<td>
			{!! $b->alamat_ortu !!}
		</td>
	</tr>
 

 	<tr>
		<td>
	Kota			
		</td>
		<td>
			 @if(count($b->ref_kota_ortu)>0)
			 	{!! $b->ref_kota_ortu->nama !!}
			 @else
			 	-
			 @endif
		</td>
	</tr>



 	<tr>
		<td>
			No HP			
		</td>
		<td>
 		 	{!! $b->no_hp !!}
		</td>
	</tr>



</table>