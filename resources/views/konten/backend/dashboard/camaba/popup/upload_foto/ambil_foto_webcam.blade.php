@include($base_konten_view.'komponen.nav_atas')

<hr>

<div class='pull-right' id="results">Your captured image will appear here...</div>



	<div id="my_camera"></div>
	
	<!-- First, include the Webcam.js JavaScript Library -->
	<script type="text/javascript" src="/js/plugins/webcamjs/webcam.js"></script>




	<script language="JavaScript">
		Webcam.set({
			width: 320,
			height: 240,
			image_format: 'jpeg',
			jpeg_quality: 90
		});
		Webcam.attach( '#my_camera' );
	</script>


<hr>

@if(File::isWritable(public_path('upload/foto')))
	<!-- A button for taking snaps -->
	<button style='font-size:30px;' onClick="take_snapshot()" class='btn btn-info'> 
		<i class='fa fa-check-circle'></i> Ambil Gambar
	</button>
@else
    <div class='alert alert-danger'>error! masalah pada permision di folder <b>public/upload/foto/</b> </div>
@endif



 
	
	<!-- Code to handle taking the snapshot and displaying it locally -->
	<script language="JavaScript">
		function take_snapshot() {
			// take snapshot and get image data
			Webcam.snap( function(data_uri) {
				// display results in page
				document.getElementById('results').innerHTML = 
 					'<img src="'+data_uri+'"/>';
			});

        Webcam.upload( data_uri, '{!! route("camaba.do_upload_webcam") !!}', function(code, text) {
            // Upload complete!
            // 'code' will be the HTTP response code from the server, e.g. 200
            // 'text' will be the raw response content
        });



		}
	</script>