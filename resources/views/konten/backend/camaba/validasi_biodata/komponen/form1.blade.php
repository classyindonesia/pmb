<div class="form-group">
{!! Form::label('no_pendaftaran', "Nomor Pendaftaran : ") !!}
<input class="form-control" type="text" readonly="0" name="no_pendaftaran" value="{!! Auth::user()->mst_pendaftaran->no_pendaftaran !!}">
</div>


<div class="form-group">
{!! Form::label('nama', "Nama Lengkap : ") !!}
<input class="form-control" type="text" name="nama" value="{!! Auth::user()->mst_pendaftaran->nama !!}">
</div>

 
 


'ref_agama_id',
'tempat_lahir',
'tgl_lahir',
'alamat',
'ref_kota_id',
'jenis_kelamin',
'no_hp',

