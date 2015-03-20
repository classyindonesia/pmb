
@include('layouts.komponen.global.script_upload')



    @if(file_exists(public_path('upload/foto/'.md5(Auth::user()->email).'.jpg')))
        <img src="/upload/foto/{!! md5(Auth::user()->email) !!}.jpg?{!! date('YmdHis') !!}"   id='gambar' class='img-rounded'   style='width:140px;height:160px;border:3px solid #aaa;' />
    @else
        <div id='gambar' class='img-rounded' style='width:140px;height:160px;border:3px solid #aaa;'   ></div>
    @endif





<div class="fileUpload btn btn-primary">
    <span> <i class="fa fa-link"></i> pilih file </span>
    <input data-form-data='{"_token": "{!! csrf_token() !!}" }' 
        id="fileupload" 
        type="file"
        name="files" 
        data-url="{!! URL::route('camaba.do_upload_foto') !!}" 
        class='btn btn-primary upload'
    />
</div>
<span style='width:100px;overflow:hidden;' id='selected_file'></span>




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
<hr>

<div id='tombol_upload'>
    @if(File::isWritable(public_path('upload/foto')))
        <button class="btn btn-primary" id="do_upload">
                            <i class="fa fa-floppy-o"></i>  SIMPAN</button>
    @else
        <div class='alert alert-danger'>error! masalah pada permision di folder <b>public/upload/foto/</b> </div>
    @endif
</div>



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
        acceptFileTypes: /(\.|\/)(jpg|jpeg|png)$/i,
        maxFileSize: {{ $max_upload }},        
        add: function (e, data) {

    $.each(data.files, function (index, file) {
        $('#selected_file').html(file.name);
        $('#selected_file').textlimit();
        console.log('Added file: ' + file.name);
    });
           $("#do_upload").off('click').on('click',function () {           
             data.submit();
           });
        },
//function start here
        done: function (e, data) {
            $.each(data.result.files, function (index, file) {
                $('<p/>').html('<span class="text-success">saved!</span>').appendTo('#files');
                 data.files.splice(index,1); //remove selected file
                 $('#selected_file').html('');
            });
             
          },    
    processfail: function (e, data) {
        set_progress_bar(0);
        $('<p/>').html('<span class="text-danger">Processing ' + data.files[data.index].name + ' failed! '+data.files[data.index].error+'</span>').appendTo('#files');
         console.log('Processing ' + data.files[data.index].name + ' failed.! '+data.files[data.index].error);
    },
    start: function (e) {
        $("#do_upload").attr('disabled', 'disabled');
            $('#alert').fadeIn(); 
            console.log('Uploads started');
        },
    stop: function (e) {
        $('#close_alert').fadeIn();
        console.log('Uploads finished');
        set_progress_bar(0);
        $('#do_upload').removeAttr('disabled');
   var skrg = new Date();
   var skrg_int = skrg.getDate()+""+skrg.getHours()+""+skrg.getMinutes()+""+skrg.getSeconds();

    $('#fileupload').val('');
    

       $('#gambar').attr('src', '/upload/foto/{!! md5(Auth::user()->email).".jpg?" !!}'+skrg_int);
       // window.location.reload();

    },
    fail: function (e, data) {
        console.log(data.jqXHR)
        $('<p/>').html('<span class="text-danger">'+data.textStatus+': '+data.errorThrown+'</span>').appendTo('#files');
    },
    progressall: function (e, data) {
        var progress = parseInt(data.loaded / data.total * 100, 10);
        set_progress_bar(progress); 
    }


//function end




    });
});

 

$('#myModal').on('hidden.bs.modal', function (e) {
  window.location.reload();
})


</script>


