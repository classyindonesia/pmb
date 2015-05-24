<style type="text/css">
.header_text_top{
	margin-top: -5px;
	margin-bottom: 2px;
}
.logo{
	width: 60px;
	height: 60px;
	margin-bottom: 1em;
	}
.kotak_materai{
	border : 1px solid #ccc; 
	width:100px;
	height: 4px;

}
</style>

 


@include($base_view.'cetak.komponen.header')


@include($base_view.'cetak.komponen.data_identitas_diri')


@include($base_view.'cetak.komponen.data_keluarga')

@include($base_view.'cetak.komponen.data_akademik')


@include($base_view.'cetak.komponen.footer')