@foreach($album_gallery as $list)
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail" style="height: 450px;overflow: hidden;">
            <h4 class="text-center">
                <span class="label label-info">
                    <i class="fa fa-tag"></i> {!! $list->nama !!}
                </span>
            </h4>
            <a href="{!! route('frontend.gallery.images', $list->id) !!}">
              @include($base_view.'view_gambar_album')
            </a>
            <div style="padding: 10px;margin-top: -3em;">
                @include($base_view.'caption_album')
                <hr style="margin: 4px;">
                {{-- @include($base_view.'action') --}}
            </div>
        </div>
    </div>
@endforeach
{!! $album_gallery->render() !!}