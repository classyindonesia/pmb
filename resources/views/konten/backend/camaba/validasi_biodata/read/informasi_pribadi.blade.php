<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Informasi Pribadi</h3>
  </div>
  <div class="panel-body">
  <div class="col-md-6">
      <table class="table table-hover">
          <tr>
            <td>Nama Lengkap</td>
            <td>
              {!! $biodata->mst_biodata->nama !!}
            </td>
          </tr>

          <tr>
            <td>Tgl Lahir</td>
            <td>
              {!! Fungsi::date_to_tgl($biodata->mst_biodata->tgl_lahir) !!}
            </td>
          </tr>



          <tr>
            <td>Agama</td>
            <td>
            @if(count($biodata->mst_biodata->ref_agama)>0)
              {!! $biodata->mst_biodata->ref_agama->nama !!}
            @else
            -
            @endif
            </td>
          </tr>

         <tr>
            <td>Jenis Kelamin</td>
            <td>
            @if($biodata->mst_biodata->jenis_kelamin == 'L')
              Laki-laki
            @else
              Perempuan
            @endif
            </td>
          </tr>
      </table>
  </div>
  <div class="col-md-6">

      <table class="table table-hover">
          <tr>
            <td>Tempat Lahir</td>
            <td>
              {!! $biodata->mst_biodata->tempat_lahir !!}
            </td>
          </tr>
           <tr>
            <td>Jumlah Saudara</td>
            <td>
              {!! $biodata->mst_biodata->jml_saudara !!}
            </td>
          </tr>
           <tr>
            <td>Anak ke</td>
            <td>
              {!! $biodata->mst_biodata->anak_ke !!}
            </td>
          </tr>


       </table>


  </div>
  </div>
</div>