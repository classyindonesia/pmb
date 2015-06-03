<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Informasi Sekolah</h3>
  </div>
  <div class="panel-body">
  <div class="col-md-6">



      <table class="table table-hover">
          <tr>
            <td>Tahun lulus</td>
            <td>
              {!! $biodata->mst_biodata->tahun_lulus !!}
            </td>
          </tr>



          <tr>
            <td>Nomor Ijazah</td>
            <td>
              {!! $biodata->mst_biodata->no_ijazah !!}
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
  <div class="col-md-6">


      <table class="table table-hover">
          <tr>
            <td>Alamat sekolah</td>
            <td>
              {!! $biodata->mst_biodata->alamat_sekolah !!}
            </td>
          </tr>

 
@if($biodata->mst_biodata->ref_sma_id == 9999)

          <tr>
            <td>Asal sekolah</td>
            <td>
                {!! $biodata->mst_biodata->keterangan_sma !!}
            </td>
          </tr>   

@else

          <tr>
            <td>Asal sekolah</td>
            <td>
              @if(count( $biodata->mst_biodata->ref_sma)>0)
                {!! $biodata->mst_biodata->ref_sma->nama !!}
              @else
                -
              @endif
            </td>
          </tr>          


@endif


        </table>


  </div>

  </div>
</div>
