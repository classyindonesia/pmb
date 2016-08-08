<style type="text/css">
.garis_ttd{
	border-bottom : 1px solid #4C4C4C; 
	width:200px;
	height: 4px;

}
</style>


<hr style="margin-top:2em;margin-bottom:1px;"> 
saya menyatakan data yang saya isikan adalah benar



<table width="100%" style="padding-top:10em;">


	<tr>
		<td width="40%"  class="garis_ttd">
			Mengetahui, <br>
			Orang tua/Wali
 				<br><br><br><br><br><br><br><br><br><br>

		</td>
		<td style="width: 25%">
			<br>
		</td>		
		<td style="width: 35%" >
			{{ Fungsi::date_to_tgl(date('Y-m-d', strtotime($b->created_at))) }}<br>
			Mahasiswa Ybs.
			<br>
			<br>

			meterai 6000
			<br>
			<br>			
			<br><br><br><br>	
			{{ $b->nama }}		 

			<br>
			<br>
			<br>
			
		</td>		

	</tr>

</table>