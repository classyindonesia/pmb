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

            


            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>




        <ul class="nav navbar-nav navbar-right">
            <li><a href="/auth/login"> <i class='fa fa-lock'></i> Login</a></li>
        </ul>




        </div><!--/.nav-collapse -->
      </div>
    </nav>