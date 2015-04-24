<?php $no=1;?>
<table width="100%">
@foreach($tt as $list)
	
 	 
 
	@include($base_view.'cetak.data_row')
 

 

 <?php $no++; ?>
@endforeach

</table>