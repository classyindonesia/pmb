<script type="text/javascript">
$(document).ready(function() {
    $("#value_masa_aktif_pin").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) ||
             // Allow: Ctrl+C
            (e.keyCode == 67 && e.ctrlKey === true) ||
             // Allow: Ctrl+X
            (e.keyCode == 88 && e.ctrlKey === true) ||
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
});	

</script>


	<tr>
	<td width='5%' class="text-center">8.</td>
		<td>Masa aktif PIN</td>
		<td width='20%'>
		<input type='text' name='masa_aktif_pin' value='{!! SV::get("masa_aktif_pin") !!}' placeholder='masa aktif pin...' id='value_masa_aktif_pin' >
		</td>

		<td width='5%'>
			{!! Action::update_variable('8', 'masa_aktif_pin') !!}
		</td>
	</tr>