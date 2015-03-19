<div class="col-md-3 col-xs-3 animated fadeIn" >
    <!-- Primary tile -->
    <div class="box box-solid bg-green">
        <div class="box-header ">
            <h3 class="box-title text-center"> 
            	<i class='fa fa-info-circle'></i> TAHAP 2
        	</h3>
         
        </div>
        <div class="box-body">
            <p>
 

            Pilih Program Studi       
            <i class='fa fa-pencil-square pull-right' style='font-size:30px;cursor:pointer;' id='edit_prodi'></i>  
 


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