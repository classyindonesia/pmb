
<div id="example">
  <ul>    
      @foreach($foto as $list)    
      <li style='height:25em;'>
         <div class="row">
         <div class="col-md-12" style="margin-left:0em;">
               <div class="thumbnail">
                <h3 class='text-center'> @if(count($list->ref_jabatan)>0) {!! $list->ref_jabatan->nama !!} @else - @endif  </h3>
                  <img class='img-rounded' src="/upload/foto_slide/{!! $list->nama_file_asli !!}" alt="...">
                <div class="caption">                
                  <p class='text-center'>
                    {!! $list->nama !!} <br>
                    {!! $list->no_induk !!}

                  </p>
                </div>
              </div>           
         </div>
       </div>
    </li>
      @endforeach
  </ul>
</div>

<script type="text/javascript">
$(function() {
  $('#example').vTicker();
});
</script>