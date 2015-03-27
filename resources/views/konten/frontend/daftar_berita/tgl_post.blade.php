<i class='fa fa-calendar'></i> {!! Fungsi::date_to_tgl(date('Y-m-d', strtotime($berita->created_at))) !!}
|| 
<i class='fa fa-clock-o'></i> {!!  date('H:i:s', strtotime($berita->created_at))  !!} WIB
||

<i class='fa fa-user'></i> 
	@if(count($berita->mst_user)>0) 
		{!! $berita->mst_user->nama !!}
	@else
		-
	@endif