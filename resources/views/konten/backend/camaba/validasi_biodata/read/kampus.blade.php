<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Identitas</h3>
  </div>
  <div class="panel-body">

    <div class="col-md-4">

    <table class="table table-hover">


           <tr>
            <td>Ukuran Almamater</td>
            <td>
              @if(count($biodata->mst_biodata->ref_ukuran_almamater)>0)
                 {!! $biodata->mst_biodata->ref_ukuran_almamater->nama !!}
                @else
                 -
                @endif
             </td>
          </tr>  



           <tr>
            <td>Jenis Pendaftaran</td>
            <td>
              @if($biodata->mst_biodata->jenis_pendaftaran == 'sma')
                Peserta Didik Baru
              @else
                 Pindahan/Transfer
              @endif
             </td>
          </tr>  



@if($biodata->mst_biodata->jenis_pendaftaran == 'transfer')
           <tr>
            <td>Perguruan Tinggi </td>
            <td>
              @if(count($biodata->mst_biodata->ref_perguruan_tinggi)>0)
                 {!! $biodata->mst_biodata->ref_perguruan_tinggi->nama !!}
                @else
                 -
                @endif
             </td>
          </tr>  
 


           <tr>
            <td>Program Studi </td>
            <td>
              @if(count($biodata->mst_biodata->ref_prodi_pt)>0)
                 {!! $biodata->mst_biodata->ref_prodi_pt->nama !!}
                @else
                 -
                @endif
             </td>
          </tr>  
 




@endif

    </table>

    </div>

    <div class="col-md-4">
      @include('konten.backend.baa.biodata.popup.komponen.info')   
    </div>

  </div>
</div>

 