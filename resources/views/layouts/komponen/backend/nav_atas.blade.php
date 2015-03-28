 <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid" style="padding-left:4em;padding-right:5em;">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand animated bounceInDown" href="{!! route('admin_dashboard.index') !!}">
            <i class='fa fa-home'></i> {!! env('NAMA_APP', 'Official Website') !!}
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">

<p class="navbar-text navbar-right">
  Signed in as <b>{!! Auth::user()->nama !!}</b>   || 
  <a href="{!! route('auth.getLogout') !!}"> <i class='fa fa-sign-out'></i> Log out</a>
</p>

 

        </div>
      </div>
    </nav>