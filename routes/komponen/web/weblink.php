<?php

Route::get('weblink', [
    'middleware'    => 'hanya_web',
    'uses'            => 'Backend\Web\WeblinkController@index',
    'as'            => 'admin_weblink.index'
    ]);





/* kelola weblink */
Route::get('weblink/add', [
    'middleware'    => 'hanya_web',
    'uses'            => 'Backend\Web\WeblinkController@add',
    'as'            => 'admin_weblink.add'
]);
Route::get('weblink/edit/{id}', [
    'middleware'    => 'hanya_web',
    'uses'            => 'Backend\Web\WeblinkController@edit',
    'as'            => 'admin_weblink.edit'
]);


Route::post('weblink/insert', [
    'middleware'    => 'hanya_web',
    'uses'            => 'Backend\Web\WeblinkController@insert',
    'as'            => 'admin_weblink.insert'
]);

Route::post('weblink/del', [
    'middleware'    => 'hanya_web',
    'uses'            => 'Backend\Web\WeblinkController@del',
    'as'            => 'admin_weblink.del'
]);

Route::post('weblink/update', [
    'middleware'    => 'hanya_web',
    'uses'            => 'Backend\Web\WeblinkController@update',
    'as'            => 'admin_weblink.update'
]);






/* kelola kategori weblink */

 Route::get('weblink/kategori', [
    'middleware'    => 'hanya_web',
    'uses'            => 'Backend\Web\WeblinkController@kategori',
    'as'            => 'admin_weblink.kategori'
    ]);

  Route::get('weblink/add_kategori', [
    'middleware'    => 'hanya_web',
    'uses'            => 'Backend\Web\WeblinkController@add_kategori',
    'as'            => 'admin_weblink.add_kategori'
    ]);

Route::get('weblink/edit_kategori/{id}', [
    'middleware'    => 'hanya_web',
    'uses'            => 'Backend\Web\WeblinkController@edit_kategori',
    'as'            => 'admin_weblink.edit_kategori'
]);

Route::post('weblink/insert_kategori', [
'middleware'    => 'hanya_web',
'uses'            => 'Backend\Web\WeblinkController@insert_kategori',
'as'            => 'admin_weblink.insert_kategori'
]);


Route::post('weblink/del_kategori', [
    'middleware'    => 'hanya_web',
    'uses'            => 'Backend\Web\WeblinkController@del_kategori',
    'as'            => 'admin_weblink.del_kategori'
]);

Route::post('weblink/update_kategori', [
    'middleware'    => 'hanya_web',
    'uses'            => 'Backend\Web\WeblinkController@update_kategori',
    'as'            => 'admin_weblink.update_kategori'
]);
