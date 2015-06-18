<h1>Hasil polling</h1>

<hr>

<h3>
	{!! $pertanyaan->pertanyaan !!}	:
</h3>



<hr>
{{-- hasil = jml pilihan jawaban * 100 / jml peserta thn angkatan skrg  --}}

<ul class="list-unstyled">
	@foreach($pertanyaan->mst_pilihan_polling as $list)
		<li>
			{!! $list->pilihan !!} <br> 

 
<?php 


	$jml_jawaban_per_pilihan = count($list->mst_jawaban_polling);
	if($jml_jawaban_per_pilihan <=0){
		$hasil = 0;
	}else{
		$hasil_tmp = $jml_jawaban_per_pilihan * 100;
		$hasil = $hasil_tmp / $jml_peserta;		
		$hasil = round($hasil,0);
	}

 ?>

<div class="progress">
  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="{!! $hasil !!}" aria-valuemin="0" aria-valuemax="100" style="width: {!! $hasil !!}%;">
    {!! $hasil !!}% [{!! $jml_jawaban_per_pilihan !!}]
  </div>
</div>

 
		</li>
	@endforeach		
</ul>
