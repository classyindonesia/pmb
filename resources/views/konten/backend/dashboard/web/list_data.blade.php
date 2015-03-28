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