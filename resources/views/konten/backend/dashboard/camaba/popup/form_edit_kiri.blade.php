<div class='col-md-6'>
	<div class='form-group'>
		{!! Form::label("nama", 'Nama Lengkap :') !!}
		<input type='text' value='{!! $b->nama !!}' name='nama' id='nama' class='form-control' placeholder='Nama Lengkap...' />
	</div>




	<div class='form-group'>
		{!! Form::label("tempat_lahir", 'Tempat Lahir :') !!}
		<br>
 					<input type='text' value='{!! $b->tempat_lahir !!}' name='tempat_lahir' id='tempat_lahir' class='form-control' placeholder='Tempat Lahir...' />
 
	</div>


<div class='form-group'>
		{!! Form::label("tgl_lahir", 'Tgl Lahir :') !!}
	{!! Form::selectRange('tgl_lahir', 1, 31, date('d', strtotime($b->tgl_lahir)),  ['id' => 'tgl_lahir', 'style' => 'width:40px' ]) !!}
	{!! Form::selectMonth('bln_lahir', date('m', strtotime($b->tgl_lahir)),  ['id' => 'bln_lahir', 'style' => 'width:80px' ]) !!} 
	{!! Form::selectYear('thn', 1950, 2010,  date('Y', strtotime($b->tgl_lahir)), ['id' => 'thn_lahir', 'style' => 'width:60px' ]) !!}
</div>
 

	<div class='form-group'>
		{!! Form::label("jenis_kelamin", 'Jenis Kelamin :') !!}  
		{!! Form::select('jenis_kelamin', ['L' => 'Laki-laki', 'P' => 'Perempuan'], $b->jenis_kelamin, ['id' => 'jenis_kelamin']) !!}
	</div>



	<div class='form-group'>
		{!! Form::label("alamat_email", 'E-Mail :') !!} <br>
		<input type='text' readonly=0 name='alamat_email' value='{!! $b->alamat_email !!}' id='alamat_email' class='form-control' placeholder='Alamat Email...' />
	</div>	

	<div class='form-group'>
		{!! Form::label("no_hp", 'Nomor Handphone :') !!}
		<input type='text' value='{!! $b->no_hp !!}' name='no_hp' id='no_hp' class='form-control' placeholder='Nomor Handphone...' />
	</div>

</div>