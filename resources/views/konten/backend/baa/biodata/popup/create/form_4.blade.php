   <div class="form-group">
    {!! Form::label('alamat_twitter', 'Alamat Twitter : ') !!}
    <input type="text" name='alamat_twitter' value="" placeholder='Alamat Twitter...' class="form-control" />
  </div>


   <div class="form-group">
    {!! Form::label('no_hp', 'Nomor HP : ') !!}
    <input type="number" name='no_hp' id='no_hp' value="{!! $biodata->no_hp !!}" placeholder='Nomor HP...' class="form-control" />
  </div>

 <script type="text/javascript">
 
     $('#no_hp').keypress(function(e) {
            var a = [];
            var k = e.which;

            for (i = 48; i < 58; i++)
            a.push(i);
            a.push(8);
            if (!(a.indexOf(k)>=0))
                e.preventDefault();
            }); 
</script>