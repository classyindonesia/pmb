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
 

            <li @if(isset($pendaftaran_online_home)) class="active" @endif >
                <a href="{!! route('pendaftaran_online.index') !!}"> 
                  <i class='fa fa-users'></i> Pendaftaran Online
                </a>
              </li>

            


 


        </div><!--/.nav-collapse -->
      </div>
    </nav>