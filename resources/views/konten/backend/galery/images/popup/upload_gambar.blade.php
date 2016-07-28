    <script src="/js/plugins/blueimp/vendor/jquery.ui.widget.js"></script>
    <script src="/js/plugins/blueimp/jquery.iframe-transport.js"></script>
    <script src="/js/plugins/blueimp/jquery.fileupload.js"></script>
    <script src="/js/plugins/blueimp/jquery.fileupload-process.js"></script>
    <script src="/js/plugins/blueimp/jquery.fileupload-validate.js"></script>

<h3>
	Upload Image
</h3>
<hr>
@if(!File::isWritable(public_path('upload/galery/')))
	<div class="alert alert-danger">
		<h4>
			masalah permision pada folder <b>/public/upload/galery/</b>
		</h4>
	</div>
@endif

<div class="fileUpload btn btn-primary">
    <span> <i class="fa fa-link"></i> pilih file </span>
     <input 
        id="fileupload" 
        type="file"
        name="files[]"
        multiple='true' 
        data-url="{!! URL::route('backend.galery.do_upload_gambar') !!}" 
        class='btn btn-primary upload'
    />
</div>
<span style='width:100px;overflow:hidden;' id='selected_file'></span>


<hr>

<button id='do_upload' class='btn btn-primary'> <i class='fa fa-play'></i> start upload</button>
    <div id='files'></div>


<script>

$(document).ready(function() {

  $.fn.textlimit = function()
  { 

    return this.each(function()                       
    {

    var $elem = $(this);            // Adding this allows u to apply this anywhere
    var $limit = 22;                // The number of characters to show
    var $str = $elem.html();        // Getting the text
    var $strtemp = $str.substr(0,$limit);   // Get the visible part of the string
    $str = $strtemp + '<span class="hide">' + $str.substr($limit,$str.length) + '</span> ...';  
    $elem.html($str);
    })

  };

});






$(function () {
    $('#fileupload').fileupload({
        dataType: 'json',
        acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
        maxFileSize: {{ $max_upload }},
        add: function (e, data) {

            $.each(data.files, function (index, file) {
                $('#selected_file').html(file.name);
                $('#selected_file').textlimit();
                console.log('Added file: ' + file.name);
            });

           $("#do_upload").click(function(){
            //  mst_album_galery_id = $.trim($('#mst_album_galery_id').val());
           	// if( mst_album_galery_id == ''){
           	// 	//alert('masih ada isian yg kosong!');
           	// 	return false;
           	// }
           	 data.submit();
           })
        },        
        done: function (e, data) {
            $.each(data.result.files, function (index, file) {
                $('#mst_album_galery_id').val('');
                 $('#files').html('<span class="text-success">saved!</span>');
                data.files.splice(index,1); //remove selected file
                $('#selected_file').html('');
            });
        },
    processfail: function (e, data) {
        $('<p/>').html('<span class="text-danger">Processing ' + data.files[data.index].name + ' failed! '+data.files[data.index].error+'</span>').appendTo('#files');
         console.log('Processing ' + data.files[data.index].name + ' failed.! '+data.files[data.index].error);
    },
    start: function (e) {
        $("#do_upload").attr('disabled', 'disabled');
            console.log('Uploads started');
            $('#files').html('<span class="text-warninf">uploading... <i class="fa fa-refresh fa-spin"></i> </span>');
        },
    stop: function (e) {
        console.log('Uploads finished');
        $('#do_upload').removeAttr('disabled');
       // window.location.reload();
    },
    fail: function (e, data) {
        console.log(data.jqXHR)
        $('#files').html('<span class="text-danger">'+data.textStatus+': '+data.errorThrown+'</span>');
    },    

    }).on('fileuploadsubmit', function (e, data) {
		  data.formData = {
		  	// data tambahan jika ada
	        mst_album_galery_id : {{ $album->id }},
	        // is_watermarked : $('#is_watermarked').val(),
		  	_token: "{!! csrf_token() !!}"  
		  }
	});
});






$('#myModal').on('hidden.bs.modal', function (e) {
  window.location.reload();
})

</script>



