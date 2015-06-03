<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Alamat</h3>
  </div>
  <div class="panel-body">
  <div class="col-md-4">

      <table class="table table-hover">
          <tr>
            <td>Alamat</td>
            <td>
              {!! $biodata->mst_biodata->alamat !!}
            </td>
          </tr>
          <tr>
            <td>Kota</td>
            <td>
              @if(count( $biodata->mst_biodata->ref_kota)>0)
                {!! $biodata->mst_biodata->ref_kota->nama !!}
              @else
                -
              @endif
            </td>
          </tr>          
 
        </table>


  </div>
  <div class="col-md-4">

      <table class="table table-hover">
          <tr>
            <td>RT/RW</td>
            <td>
              {!! $biodata->mst_biodata->rt !!}/
              {!! $biodata->mst_biodata->rw !!}
            </td>
          </tr>
           <tr>
            <td>Kode POS</td>
            <td>
              {!! $biodata->mst_biodata->kode_pos !!}
             </td>
          </tr>
        </table>
 </div>
  <div class="col-md-4">

        <table class="table table-hover">

          <tr>
            <td>Kewarganegaraan</td>
            <td>
              {!! strtoupper($biodata->mst_biodata->kewarganegaraan) !!}
             </td>
          </tr>
          <tr>
            <td>Jenis tinggal</td>
            <td>
              @if(count( $biodata->mst_biodata->ref_tinggal)>0)
                {!! $biodata->mst_biodata->ref_tinggal->nama !!}
              @else
                -
              @endif
            </td>
          </tr>           
        </table>


  
  </div>


  </div>
</div>