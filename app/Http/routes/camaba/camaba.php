<?php
get('camaba/edit_biodata', [
	'uses'	=> 'Backend\Camaba\PendaftaranController@edit_biodata',
	'as'	=> 'camaba.edit_biodata'
]);


post('camaba/update_biodata', [
	'uses'	=> 'Backend\Camaba\PendaftaranController@update_biodata',
	'as'	=> 'camaba.update_biodata'
]);







get('camaba/edit_prodi', [
	'uses'	=> 'Backend\Camaba\PendaftaranController@edit_prodi',
	'as'	=> 'camaba.edit_prodi'
]);
post('camaba/update_prodi', [
	'uses'	=> 'Backend\Camaba\PendaftaranController@update_prodi',
	'as'	=> 'camaba.update_prodi'
]);



/* step 3, photo */
get('camaba/upload_foto', [
	'uses'	=> 'Backend\Camaba\PendaftaranController@upload_foto',
	'as'	=> 'camaba.upload_foto'
]);
post('camaba/do_upload_foto', [
	'uses'	=> 'Backend\Camaba\PendaftaranController@do_upload_foto',
	'as'	=> 'camaba.do_upload_foto'
]);



