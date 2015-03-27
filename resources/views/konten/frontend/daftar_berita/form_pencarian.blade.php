{!! Form::open(['route' => 'daftar_berita.index', 'method' => 'get']) !!}

<input value="{!! Request::get('search') !!}" type='text' name='search' class="form-control" placeholder='search berita...' autofocus />


{!! Form::close() !!}