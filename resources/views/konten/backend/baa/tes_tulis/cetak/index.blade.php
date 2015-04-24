<?php $no=1;?>

@foreach($tt as $list)
	
@if($no == 1)
	@include($base_view.'cetak.header_page')
@endif	
	@include($base_view.'cetak.data_row')


@if($no >= 30)
	</table>
	<?php $no =1; ?> 
	@if($no == 1)
		@include($base_view.'cetak.header_page')
	@endif	
		@include($base_view.'cetak.data_row')
@endif

 <?php $no++; ?>
@endforeach
