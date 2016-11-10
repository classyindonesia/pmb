  <nav class="nav-sidebar">
    <ul class="nav">



        <li @if(isset($dashboard_home)) class="active" @endif >
            <a href="{{ URL::route('admin_dashboard.index') }}">
                <i class='fa fa-home'></i> Home
            </a>
        </li>
          
        <li @if(isset($berita_home)) class="active" @endif >
            <a href="{{ URL::route('admin_berita.index') }}">
                <i class='fa fa-newspaper-o'></i> Berita
            </a>
        </li>


        <li @if(isset($weblink_home)) class="active" @endif >
            <a href="{{ URL::route('admin_weblink.index') }}">
                <i class='fa fa-link'></i> Web link
            </a>
        </li>                    


        <li @if(isset($foto_slide_utama_home)) class="active" @endif>
            <a href="{{ URL::route('foto_slide_utama.index') }}">
                <i class='fa fa-image'></i> Foto Slide utama
            </a>
        </li>



        <li @if(isset($foto_slide_home)) class="active" @endif>
            <a href="{{ URL::route('foto_slide.index') }}">
                <i class='fa fa-image'></i> Foto Slide
            </a>
        </li>



        <li @if(isset($backend_menu_home)) class="active" @endif>
            <a href="{{ URL::route('backend.menu.index') }}">
                <i class='fa fa-th'></i> Menu
            </a>
        </li>

        @can('showMenu2', \App\Models\Mst\Menu2::class)
            <li @if(isset($backend_menu2_home)) class="active" @endif>
                <a href="{{ URL::route('backend.menu2.index') }}">
                    <i class='fa fa-th-list'></i> Menu 2
                </a>
            </li>
        @endcan



        <li @if(isset($backend_galery_home)) class="active" @endif>
            <a href="{{ URL::route('backend.galery.index') }}">
                <i class='fa fa-image'></i> Galery
            </a>
        </li>

  @include('layouts.komponen.backend.sidebar.global')

 

    </ul>
</nav>
