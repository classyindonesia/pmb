    <!-- Fixed navbar -->
    <nav class="navbar navbar-default">
      <div class="container">

        <div class="navbar-header">

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a style='display:none;' class="navbar-brand" href="{!! route('home.index') !!}"> 
            <i class='fa fa-home'></i> {!! env('NAMA_APP', 'Official Website') !!}
          </a>
        </div>


        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">

            <li @if(isset($frontend_home)) class="active" @endif >
                <a href="{!! route('home.index') !!}"> 
                  <i class='fa fa-home'></i> Home
                </a>
              </li>            
 
        @if($sv->get_val('show_pendaftaran_online_public') == 1)
            <li @if(isset($pendaftaran_online_home)) class="active" @endif >
                <a href="{!! route('pendaftaran_online.index') !!}"> 
                  <i class='fa fa-users'></i> Pendaftaran Online
                </a>
              </li>
        @endif


        @if($sv->get_val('show_list_file_public') == 1)
            <li @if(isset($daftar_file_home)) class="active" @endif >
                <a href="{!! route('daftar_file.index') !!}"> 
                  <i class='fa fa-list'></i> Daftar File
                </a>
            </li>
        @endif


            <li @if(isset($daftar_berita_home)) class="active" @endif >
                <a href="{!! route('daftar_berita.index') !!}"> 
                  <i class='fa fa-newspaper-o'></i> Daftar Berita
                </a>
            </li>


          </ul>



  <ul class="nav navbar-nav navbar-right"> 
      @if($sv->get_val('config_password_frontend') == 1)
      <li @if(isset($reset_password_home)) class='active' @endif><a href="/password/email">
        <i class='fa fa-envelope'></i> lupa password</a></li>  
        @endif      


      @if($sv->get_val('config_login_frontend') == 0)
      <li>
           <a id='login_page' href="#">
            <i class='fa fa-lock'></i> LOGIN
          </a>
      </li>  
<script type="text/javascript">
$('#login_page').click(function(){
  $('#myModal').modal('show');
  $('.modal-body').load('{!! route("auth.login") !!}')
  return false;
})
</script>

        @endif  


</ul>

          

     

        </div><!--/.nav-collapse -->
      </div>
    </nav>