alamat_email					= $('#alamat_email').val();
alamat_fb						= $('#alamat_fb').val();
alamat_twitter					= $('#alamat_twitter').val();
mst_pendaftaran_id				= {!! $biodata->id !!};
nama							= $('#nama').val();
ref_agama_id					= $('#ref_agama_id').val();
tempat_lahir					= $('#tempat_lahir').val();
tgl_lahir						= $('#thn_lahir').val()+'-'+$('#bln_lahir').val()+'-'+$('#tgl_lahir').val();
alamat							= $('#alamat').val();
ref_kota_id						= $('#ref_kota_id').val();
jenis_kelamin					= $('#jenis_kelamin').val();
ref_sma_id						= $('#ref_sma_id').val();
tahun_lulus						= $('#tahun_lulus').val();
no_ijazah						= $('#no_ijazah').val();
alamat_sekolah					= $('#alamat_sekolah').val();
no_hp 							= $('#no_hp').val();
ref_identitas_id				= $('#ref_identitas_id').val();
no_identitas					= $('#no_identitas').val();
ref_status_daftar_ulang_id		= $('#ref_status_daftar_ulang_id').val();
ref_ukuran_almamater_id			= $('#ref_ukuran_almamater_id').val();
nama_ortu_ayah					= $('#nama_ortu_ayah').val();
nama_ortu_ibu					= $('#nama_ortu_ibu').val();
ref_penghasilan_ortu_id_ayah	= $('#ref_penghasilan_ortu_id_ayah').val();
ref_penghasilan_ortu_id_ibu		= $('#ref_penghasilan_ortu_id_ibu').val();
ref_pekerjaan_ortu_id_ayah		= $('#ref_pekerjaan_ortu_id_ayah').val();
ref_pekerjaan_ortu_id_ibu		= $('#ref_pekerjaan_ortu_id_ibu').val();
ket_ortu_ayah					= $('#ket_ortu_ayah').val();
ket_ortu_ibu					= $('#ket_ortu_ibu').val();
alamat_ortu						= $('#alamat_ortu').val();
ref_kota_id_ortu				= $('#ref_kota_id_ortu').val();
no_hp_ortu						= $('#no_hp_ortu').val();
jml_saudara						= $('#jml_saudara').val();
anak_ke							= $('#anak_ke').val();
jenis_pendaftaran				= $('#jenis_pendaftaran').val();
ref_perguruan_tinggi_id			= $('#ref_perguruan_tinggi_id').val();
rt								= $('#rt').val();
rw								= $('#rw').val();
kode_pos						= $('#kode_pos').val();
kewarganegaraan					= $('#kewarganegaraan').val();
ref_tinggal_id					= $('#ref_tinggal_id').val();
no_telepon						= $('#no_telepon').val();
keterangan_sma					= $('#keterangan_sma').val();

 

tgl_lahir_ayah					= $('#thn_lahir_ayah').val()+'-'+$('#bln_lahir_ayah').val()+'-'+$('#tgl_lahir_ayah').val();
tgl_lahir_ibu					= $('#thn_lahir_ibu').val()+'-'+$('#bln_lahir_ibu').val()+'-'+$('#tgl_lahir_ibu').val();
ref_pendidikan_id_ibu			= $('#ref_pendidikan_id_ibu').val();
ref_pendidikan_id_ayah			= $('#ref_pendidikan_id_ayah').val();






form_data = {
	tgl_lahir_ayah					: tgl_lahir_ayah,
	tgl_lahir_ibu					: tgl_lahir_ibu,
	ref_pendidikan_id_ibu			: ref_pendidikan_id_ibu,
	ref_pendidikan_id_ayah			: ref_pendidikan_id_ayah,
	keterangan_sma					: keterangan_sma,
	no_telepon						: no_telepon,
	ref_tinggal_id					: ref_tinggal_id,
	kewarganegaraan					: kewarganegaraan,
	rt								: rt,
	rw								: rw,
	kode_pos						: kode_pos,
	alamat_email					: alamat_email,
	alamat_fb						: alamat_fb,
	alamat_twitter					: alamat_twitter,
	mst_pendaftaran_id				: mst_pendaftaran_id,
	nama							: nama,
	ref_agama_id					: ref_agama_id,
	tempat_lahir					: tempat_lahir,
	tgl_lahir						: tgl_lahir,
	alamat							: alamat,
	ref_kota_id						: ref_kota_id,
	jenis_kelamin					: jenis_kelamin,
	ref_sma_id						: ref_sma_id,
	tahun_lulus						: tahun_lulus,
	no_ijazah						: no_ijazah,
	alamat_sekolah					: alamat_sekolah,
	no_hp 							: no_hp,
	ref_identitas_id				: ref_identitas_id,
	no_identitas					: no_identitas,
	ref_status_daftar_ulang_id		: ref_status_daftar_ulang_id,
	ref_ukuran_almamater_id			: ref_ukuran_almamater_id,
	nama_ortu_ayah					: nama_ortu_ayah,
	nama_ortu_ibu					: nama_ortu_ibu,
	ref_penghasilan_ortu_id_ayah	: ref_penghasilan_ortu_id_ayah,
	ref_penghasilan_ortu_id_ibu		: ref_penghasilan_ortu_id_ibu,
	ref_pekerjaan_ortu_id_ayah		: ref_pekerjaan_ortu_id_ayah,
	ref_pekerjaan_ortu_id_ibu		: ref_pekerjaan_ortu_id_ibu,
	ket_ortu_ayah					: ket_ortu_ayah,
	ket_ortu_ibu					: ket_ortu_ibu,
	alamat_ortu						: alamat_ortu,
	ref_kota_id_ortu				: ref_kota_id_ortu,
	no_hp_ortu						: no_hp_ortu,
	jml_saudara						: jml_saudara,
	anak_ke							: anak_ke,
	jenis_pendaftaran				: jenis_pendaftaran,
	ref_perguruan_tinggi_id			: ref_perguruan_tinggi_id,	
	_token 							: '{!! csrf_token() !!}'
}