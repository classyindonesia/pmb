@extends('layouts.backend')

@section('konten_utama')

  @include($base_view.'script')
  @include($base_view.'list_data')


@endsection



@section('judul_header')

<button id="upload" class="btn btn-primary pull-right"> <i class='fa fa-cloud-upload'></i> upload</button>
<script type="text/javascript">
	$('#upload').click(function(){
		$('#myModal').modal('show');
		$('.modal-body').load('{!! route("foto_slide_utama.upload_foto") !!}');
	})

</script>




  <h1 class="title_header"><i class='fa fa-image'></i>  Foto Slide Utama </h1>
@endsection