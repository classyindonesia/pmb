  <div class="col-lg-3 col-xs-6 ">
      <div class="small-box bg-olive">
        <div class="inner">
            <h3> 
               {!! $jml_berita !!}
            </h3>
            <h4>
               Jml Berita
            </h4>
        </div>
        <div class="icon">
           <i class='fa fa-newspaper-o'></i>
        </div>
        <a href="{{ URL::route('admin_berita.index') }}" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
        </a>
    </div>
</div>


  <div class="col-lg-3 col-xs-6 ">
      <div class="small-box bg-purple">
        <div class="inner">
            <h3> 
               {!! $jml_weblink !!}
            </h3>
            <h4>
               Jml Weblink
            </h4>
        </div>
        <div class="icon">
           <i class='fa fa-link'></i>
        </div>
        <a href="{{ URL::route('admin_weblink.index') }}" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
        </a>
    </div>
</div>





  <div class="col-lg-3 col-xs-6 ">
      <div class="small-box bg-yellow">
        <div class="inner">
            <h3> 
               {!! $jml_foto_slide !!}
            </h3>
            <h4>
               Jml Foto Slide
            </h4>
        </div>
        <div class="icon">
           <i class='fa fa-image'></i>
        </div>
        <a href="{{ URL::route('admin_weblink.index') }}" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
        </a>
    </div>
</div>




  <div class="col-lg-3 col-xs-6 ">
      <div class="small-box bg-blue">
        <div class="inner">
            <h3> 
               {!! $jml_foto_slide_utama !!}
            </h3>
            <h4>
               Jml Foto Slide Utama
            </h4>
        </div>
        <div class="icon">
           <i class='fa fa-image'></i>
        </div>
        <a href="{{ URL::route('foto_slide_utama.index') }}" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
        </a>
    </div>
</div>