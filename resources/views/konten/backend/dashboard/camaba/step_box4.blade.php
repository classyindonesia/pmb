<div class="col-md-3 col-xs-3 animated fadeIn" >
    <!-- Primary tile -->
    <div class="box box-solid bg-purple">
        <div class="box-header ">
            <h3 class="box-title text-center"> 
            	<i class='fa fa-info-circle'></i> TAHAP 4
        	</h3>
         
        </div>
        <div class="box-body">
            <p>
              <i id='upload_berkas' style='font-size:30px;cursor:pointer;' class='fa fa-cloud-upload pull-right'></i>  


            Upload Berkas   
 

              @if(
                file_exists(public_path('upload/berkas/surat_keterangan_lulus/'.md5(Auth::user()->email).'.jpg'))
              ||
                file_exists(public_path('upload/berkas/ijazah/'.md5(Auth::user()->email).'.jpg'))              
              )
              <script type="text/javascript">
                $('#tahap4').html('<i class="fa fa-check"> </i>');
              </script>

              @endif


 

            </p>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</div><!-- /.col -->


<script type="text/javascript">
$('#upload_berkas').click(function(){
	$('#myModal').modal('show');
	$('.modal-body').load('{!! route("camaba.upload_berkas") !!}');
	return false;
})

 </script>