<div class="col-md-4 col-xs-4 animated fadeIn" >
    <!-- Primary tile -->
    <div class="box box-solid bg-teal">
        <div class="box-header ">
            <h3 class="box-title text-center"> 
            	<i class='fa fa-info-circle'></i> TAHAP 1 
        	</h3>
         
        </div>
        <div class="box-body">
            <p>



            	@if(
            	$biodata->alamat == '' || 
            	$biodata->tgl_lahir == '0000-00-00' || 
            	$biodata->thn_lulus == 0 || 
            	$biodata->ref_sma_id = 0 ||
            	$biodata->no_ijazah == '' ||
            	$biodata->tempat_lahir == ''
            	)

                biodata utama masih kurang lengkap <br>

            	<a id='edit_biodata' class='text-danger' href="#">lengkapi di sini</a>
                @else
                <script type="text/javascript">
                $('#tahap1').html('<i class="fa fa-check"> </i>');
                </script>

                <b>Biodata Utama sudah lengkap</b>

            	@endif

            </p>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</div><!-- /.col -->


<script type="text/javascript">
$('#edit_biodata').click(function(){
	$('#myModal').modal('show');
	$('.modal-body').load('{!! route("camaba.edit_biodata") !!}');
	return false;
})

 </script>