<h1>Statistik Pendaftaran : {!! $gelombang->nama !!}</h1>
<hr>

<?php 
$jml_total = count($gelombang->mst_pendaftaran);
?>
<div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Prodi pilihan 1</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Prodi pilihan 2</a></li>
    </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane fade in active" id="home">
 <hr>
<h4>Prodi pilihan 1</h4>
 <hr>


		@foreach($prodi as $list)
		<?php  
		$jml_mhs_prodi = count($list->mst_pendaftaran1);
		if($jml_total == 0){
			$hasil = 0;
		}else{
			$hasil = $jml_mhs_prodi * 100 / $jml_total;			
		}
 ?>
			{!! $list->nama.' / '.$jml_mhs_prodi !!}  
			<div class="progress">
				<div @if($hasil <= 5) style='color:black' @endif class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{ $hasil }}%;">
		    		{{ $hasil }}%
			  </div>
		  </div>
		  <hr style="margin:2px;">
		@endforeach

    </div>
    <div role="tabpanel" class="tab-pane fade" id="profile">

 <hr>
 <h4>Prodi pilihan 2</h4>   
 <hr>
		@foreach($prodi as $list)
		<?php  
		$jml_mhs_prodi = count($list->mst_pendaftaran2);
		if($jml_total == 0){
			$hasil = 0;
		}else{
			$hasil = $jml_mhs_prodi * 100 / $jml_total;			
		}


 ?>
			{!! $list->nama.' / '.$jml_mhs_prodi !!}  
			<div class="progress">
				<div @if($hasil <= 5) style='color:black' @endif class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{ $hasil }}%;">
		    		{{ $hasil }}%
			  </div>
		  </div>
		  <hr style="margin:2px;">
		@endforeach

    </div>
  </div>

</div>


 

