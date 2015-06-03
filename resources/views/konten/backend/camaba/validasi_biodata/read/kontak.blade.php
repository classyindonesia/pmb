<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Kontak</h3>
  </div>
  <div class="panel-body">
  <div class="col-md-6">

      <table class="table table-hover">
          <tr>
            <td>Alamat Email</td>
            <td>
              {!! $biodata->mst_biodata->alamat_email !!}
            </td>
          </tr>
           <tr>
            <td>Alamat FB</td>
            <td>
              {!! $biodata->mst_biodata->alamat_fb !!}
            </td>
          </tr>
          <tr>
            <td>Nomor Telepon</td>
            <td>
              {!! $biodata->mst_biodata->no_telepon !!}
            </td>
          </tr>

        </table>
  </div>
  <div class="col-md-6">
      <table class="table table-hover">
          <tr>
            <td>Alamat Twitter</td>
            <td>
              {!! $biodata->mst_biodata->alamat_twitter !!}
            </td>
          </tr>
 
          <tr>
            <td>Nomor HP</td>
            <td>
              {!! $biodata->mst_biodata->no_hp !!}
            </td>
          </tr>
 
        </table>

  </div>
  </div>
</div>
