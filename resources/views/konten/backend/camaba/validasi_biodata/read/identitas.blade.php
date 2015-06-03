<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Identitas</h3>
  </div>
  <div class="panel-body">
  <div class="col-md-6">
      <table class="table table-hover">

           <tr>
            <td>Jenis Identitas</td>
            <td>
              @if(count( $biodata->mst_biodata->ref_identitas)>0)
                {!! $biodata->mst_biodata->ref_identitas->nama !!}
              @else
                -
              @endif
            </td>
          </tr>  

            <tr>
            <td>Nomor Identitas</td>
            <td>
              {!! $biodata->mst_biodata->no_identitas !!}
            </td>
          </tr>

        </table>
  </div>
  <div class="col-md-6">

       <table class="table table-hover">

           <tr>
            <td>Jenis Transportasi</td>
            <td>
              @if(count( $biodata->mst_biodata->ref_transportasi)>0)
                {!! $biodata->mst_biodata->ref_transportasi->nama !!}
              @else
                -
              @endif
            </td>
          </tr>  

        </table>
         

  </div>

  </div>
</div>

 