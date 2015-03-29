@if($b->is_valid == 1)
	@if($sv->get('config_pindah_prodi') == 1)
			@include($base_view.'action.ganti_prodi')
	@endif
@endif