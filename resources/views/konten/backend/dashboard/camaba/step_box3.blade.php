<div class="col-md-3 col-xs-3 animated fadeIn" >
    <!-- Primary tile -->
    <div class="box box-solid bg-yellow">
        <div class="box-header ">
            <h3 class="box-title text-center"> 
            	<i class='fa fa-info-circle'></i> TAHAP 3
        	</h3>
         
        </div>
        <div class="box-body">
            <p>
 

            Upload Foto   
             <i id='upload_foto' style='font-size:30px;cursor:pointer;' class='fa fa-cloud-upload pull-right'></i>  
 

              @if(file_exists(public_path('upload/foto/'.md5(Auth::user()->email).'.jpg')))
              <script type="text/javascript">
              $('#tahap3').html('<i class="fa fa-check"> </i>');
              </script>

              @endif


 

            </p>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</div><!-- /.col -->


<script type="text/javascript">
$('#upload_foto').click(function(){
	$('#myModal').modal('show');
	$('.modal-body').load('{!! route("camaba.upload_foto") !!}');
	return false;
})

 </script>