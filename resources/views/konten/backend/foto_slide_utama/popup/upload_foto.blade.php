<h1>Upload Foto Slider Utama</h1>
<hr>


@if(File::isWritable(public_path('upload/gambar_slide_utama')))
@include('layouts.komponen.backend.src_blueimp')

 

    <input data-form-data='{"_token": "{!! csrf_token() !!}"   }' 
        id="fileupload" 
        type="file"
        name="files[]" 
        data-url="{!! URL::route('foto_slide_utama.do_upload_gambar') !!}" 
        multiple 
        class='btn btn-primary'
    />


    <div style='display:none;' id='alert' class='alert alert-info'>
         <i style='cursor:pointer;display:none;' class='fa fa-times pull-right' id='close_alert'></i>


        <div style='display:none;' id='proses_upload'>
            <i class="fa fa-spinner fa-spin"></i>
        </div>
        <div  style='display:none;'  id="progress" class="progress">
          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
            <span id='persen_upload'>0%</span> Complete
          </div>
        </div>

        
         <div id='files'>
         </div>


    </div>


@else
    
    <div class='alert alert-danger'>
        error! permision folder <b>public/upload/gambar_slide_utama/ </b> bermasalah


    </div>

@endif




<script>

 $(document).ready(function(){
    $('#daftar_gambar').removeClass('active');
    $('#upload_gambar').addClass('active');
})
 

$('#close_alert').click(function(){
    $('#alert').hide();
    $('#close_alert').hide();
    $('#files').html('');
})

function set_progress_bar(percent_val){
    if(percent_val == 0){
        $('#progress').fadeOut(function(){
            $('#progress .progress-bar').css('width','0%'); 
            $('#persen_upload').html(percent_val+'%');             
        });
        $('#proses_upload').fadeOut();  
        $('#alert').fadeIn();
        $('#close_alert').fadeIn();
    }else{
        $('#progress .progress-bar').css(
            'width', percent_val+'%'
        );    
        $('#proses_upload').fadeIn();
        $('#persen_upload').html(percent_val+'%');   
        $('#progress').fadeIn();     
    }
}


$(function () {
    $('#fileupload').fileupload({
        dataType: 'json',
        acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
        maxFileSize: {{ $max_upload }},
        done: function (e, data) {
            $.each(data.result.files, function (index, file) {
                $('<p/>').html('<span class="text-success">'+file.name+'</span>').appendTo('#files');
            });

            /* update arsip info */
            $('#jml_file').html(data.result.jml_file);
            $('#size_all_files').html(data.result.size_all_files);
            

         },    
    processfail: function (e, data) {
        set_progress_bar(0);
		$('<p/>').html('<span class="text-danger">Processing ' + data.files[data.index].name + ' failed! '+data.files[data.index].error+'</span>').appendTo('#files');
	     console.log('Processing ' + data.files[data.index].name + ' failed.! '+data.files[data.index].error);
    },
    start: function (e) {
            $('#alert').fadeIn(); 
		    console.log('Uploads started');
		},
	stop: function (e) {
        $('#close_alert').fadeIn();
    	console.log('Uploads finished');
        set_progress_bar(0);

	},
	fail: function (e, data) {
		console.log(data.jqXHR)
    	$('<p/>').html('<span class="text-danger">'+data.textStatus+': '+data.errorThrown+'</span>').appendTo('#files');
 	},
 	progressall: function (e, data) {
    	var progress = parseInt(data.loaded / data.total * 100, 10);
        set_progress_bar(progress); 
	}

    });
});
</script>