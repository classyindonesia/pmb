    <footer class="footer">
      <div class="container">
			<div class="col-md-12">

			@foreach($kategori_weblink as $list)
				<div class='col-md-3 col-xs-4'>
					<h4><i class="fa fa-leaf"></i> {!! $list->nama !!}</h4>
					@if(count($list->mst_weblink)>0)
						<ul class="list-unstyled" >
							@foreach($list->mst_weblink as $list_weblink)
								<li style='margin-left:2em;font-size:11px;'>
									<i class='fa fa-link'></i> 
									<a href="{!! $list_weblink->url !!}" target='__blank'>
										{!! $list_weblink->nama !!}
									</a> 
								</li>
							@endforeach
						</ul>
					@endif
				</div>
			@endforeach
			</div>
</div>
<hr style='border:1px solid #aaa;'>
      <div class="container">
			<div class="col-md-12">
				
	        	<p class="text-muted text-right">Copyright &copy; {{ str_replace('http://', '', URL::to("/")) }}</p>
			</div>
		</div>


    </footer>