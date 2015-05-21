@if(count($list->mst_pengumuman)>0)
{!! Action::edit(false, route("pengumuman.edit", $list->mst_pengumuman->id), $list->mst_pengumuman->id) !!}
@endif