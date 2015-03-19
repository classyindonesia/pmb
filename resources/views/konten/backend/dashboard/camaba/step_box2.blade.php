<div class="col-md-4 col-xs-4 animated fadeIn" >
    <!-- Primary tile -->
    <div class="box box-solid bg-green">
        <div class="box-header ">
            <h3 class="box-title text-center"> 
            	<i class='fa fa-info-circle'></i> TAHAP 2
        	</h3>
         
        </div>
        <div class="box-body">
            <p>



            	@if( $jenis_daftar == 1)

                Pilih Program Studi                 <a class='btn btn-info pull-right' id='edit_prodi' class='text-danger' href="#"> <i class='fa fa-pencil-square'></i> edit data</a>


                @else

                <b>Program Studi Sudah Tervalidasi</b>

            	@endif


                @if($biodata->ref_prodi_id1 != 0)
                <script type="text/javascript">
                    $('#tahap2').html('<i class="fa fa-check"></i>')
                </script>
                @endif


            </p>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</div><!-- /.col -->


<script type="text/javascript">
$('#edit_prodi').click(function(){
	$('#myModal').modal('show');
	$('.modal-body').load('{!! route("camaba.edit_prodi") !!}');
	return false;
})

 </script>