@include('konten.frontend.auth.login')
@include('layouts.komponen.frontend.foto_slide')

@include('layouts.komponen.frontend.menu2')


@if(App\Helpers\SetupVariable::get('show_list_file_public') == 1)
	@include('layouts.komponen.frontend.lampiran_berita')
@endif


@if(App\Helpers\SetupVariable::get('show_statistik_frontend') == 1)
	@include('layouts.komponen.frontend.statistik_pengunjung')
@endif