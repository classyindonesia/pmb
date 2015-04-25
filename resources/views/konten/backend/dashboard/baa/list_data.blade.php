  <div class="col-lg-3 col-xs-6 ">
      <div class="small-box bg-olive">
        <div class="inner">
            <h3> 
               {!! $jml_pengumuman !!}
            </h3>
            <h4>
               Pengumuman
            </h4>
        </div>
        <div class="icon">
           <i class='fa fa-newspaper-o'></i>
        </div>
        <a href="{{ route('pengumuman.index') }}" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
        </a>
    </div>
</div>


  <div class="col-lg-3 col-xs-6 ">
      <div class="small-box bg-yellow">
        <div class="inner">
            <h3> 
               {!! count($jml_pendaftaran) !!}
            </h3>
            <h4>
               Pendaftar
            </h4>
        </div>
        <div class="icon">
           <i class='fa fa-users'></i>
        </div>
        <a href="{{ route('baa_data_pendaftaran.pendaftaran_camaba') }}" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
        </a>
    </div>
</div>


  <div class="col-lg-3 col-xs-6 ">
      <div class="small-box bg-light-blue">
        <div class="inner">
            <h3> 
               {!! $jml_tes_tulis !!}
            </h3>
            <h4>
               Tes Tulis
            </h4>
        </div>
        <div class="icon">
           <i class='fa fa-pencil'></i>
        </div>
        <a href="{{ route('baa_tes_tulis.index') }}" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
        </a>
    </div>
</div>


  <div class="col-lg-3 col-xs-6 ">
      <div class="small-box bg-green">
        <div class="inner">
            <h3> 
               {!! $jml_tes_skill !!}
            </h3>
            <h4>
               Tes Skill
            </h4>
        </div>
        <div class="icon">
           <i class='fa fa-connectdevelop'></i>
        </div>
        <a href="{{ route('baa_tes_skill.index') }}" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
        </a>
    </div>
</div>




