  <div class="col-lg-3 col-xs-6 ">
      <div class="small-box bg-olive">
        <div class="inner">
            <h3> 
               {!! $jml_user !!}
            </h3>
            <h4>
               Jml User
            </h4>
        </div>
        <div class="icon">
           <i class='fa fa-users'></i>
        </div>
        <a href="{{ route('admin_users.index') }}" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
        </a>
    </div>
</div>


  <div class="col-lg-3 col-xs-6 ">
      <div class="small-box bg-yellow">
        <div class="inner">
            <h3> 
               {!! $jml_pin !!}
            </h3>
            <h4>
               Jml PIN
            </h4>
        </div>
        <div class="icon">
           <i class='fa fa-qrcode'></i>
        </div>
        <a href="{{ route('admin_pin.index') }}" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
        </a>
    </div>
</div>