@inject('menu2', 'App\Models\Mst\Menu2')

	<div class='col-md-12' style="margin-bottom: 3em;">
		<div class="animated fadeInRight">

@foreach($menu2->all() as $list)

	<div id='menu2_{!! $list->id !!}' style='background-color: {!! $list->kode_warna !!};height:87px;margin-top : 5px; text-align:center;padding-top:0.1em'>
		<h1 data-toggle='tooltip' title='' 
			 	style='font-weight:bold;cursor:pointer;color:white; ' class='text-info'>
			 	<i class='{!! $list->icon !!}'></i> {!! $list->nama !!}
		</h1>
	</div>
	 
	<section class="section-white" style='margin-top : 5px;display:none; ' id='menu2_{!! $list->id !!}-slide'> 
	    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	       <!-- Wrapper for slides -->
	      <div class="carousel-inner">
	        <div class="item active">
				<div style='background-color: {!! $list->kode_warna !!};height:87px; text-align:center;padding-top:0.1em;'>
					<h1 style='font-weight:bold;cursor:pointer;color:white; ' class='text-info'>
						 	<i class='{!! $list->icon !!}'></i> {!! $list->keterangan !!}
					</h1>
				</div>  
	        </div>

	        <div  class="item">

				<div data-toggle='tooltip' title='{!! $list->keterangan !!}'  style='background-color: {!! $list->kode_warna !!};height:87px;padding-top:0.1em;'>
					
					<h5 style='font-weight:bold;cursor:pointer;color:white;text-align:center;margin-left:5px; ' class='text-info'>
						<i class='fa fa-archive'></i> <br>  {!! $list->nama !!} <br> {!! $list->keterangan !!}
					</h5>
				</div>  

	        </div>
	       </div>
	       
	    </div>
	 </section>


	  <script type="text/javascript">
	 
	 
	$('.carousel').carousel({
	    pause: "false"
	});


	 $('#menu2_{!! $list->id !!}').mouseenter(function(){
		$('#menu2_{!! $list->id !!}').hide();
		$('#menu2_{!! $list->id !!}-slide').fadeIn();
	});
	$('#menu2_{!! $list->id !!}-slide').mouseleave(function(){
		$('#menu2_{!! $list->id !!}-slide').hide();
		$('#menu2_{!! $list->id !!}').fadeIn();
	});


	  $('#menu2_{!! $list->id !!}-slide').click(function(){
	  	window.open('{!! $list->url !!}', '__blank');
	  });


	 </script>

@endforeach

	</div>
</div>
