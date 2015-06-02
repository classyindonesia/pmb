|| <i  data-toggle='tooltip' title='tambah pilihan jawaban' id='pilihan{!! $list->id !!}' class='fa fa-plus-square pointer'></i> 


<script type="text/javascript">
$('#pilihan{!! $list->id !!}').click(function(){
	$('#myModal').modal('show');
	$('.modal-body').load('{{ route("admin_polling.pilihan", $list->id) }}');
})
</script>
