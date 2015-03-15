<table class="table table-bordered table-hover">
	<tr>
		<td>Warna Navbar Header</td>
		<td width='20%'>
			<input class="color" id='value_navbar_bg_color' value="{!! SV::get('navbar_bg_color') !!}">
		</td>

		<td width='5%'>
			{!! Action::update_variable('1', 'navbar_bg_color') !!}
		</td>

	</tr>

</table>