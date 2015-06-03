<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Identitas</h3>
  </div>
  <div class="panel-body">
  <div class="col-md-4">

       <table class="table table-hover">

           <tr>
            <td>Nama Ayah</td>
            <td>
                 {!! $biodata->mst_biodata->nama_ortu_ayah !!}
 
            </td>
          </tr>  



           <tr>
            <td>Tgl lahir Ayah</td>
            <td>
                 {!! Fungsi::date_to_tgl($biodata->mst_biodata->tgl_lahir_ayah) !!}
             </td>
          </tr>  


           <tr>
            <td>Pendidikan terakhir Ayah</td>
            <td>
              @if(count($biodata->mst_biodata->ref_pendidikan_ayah)>0)
                 {!! $biodata->mst_biodata->ref_pendidikan_ayah->nama !!}
                @else
                 -
                @endif
             </td>
          </tr>  


          <tr>
            <td>Alamat Ortu</td>
            <td>
                 {!!   $biodata->mst_biodata->alamat_ortu  !!}
             </td>
          </tr> 

           <tr>
            <td>Kota Ortu</td>
            <td>
              @if(count($biodata->mst_biodata->ref_kota_ortu)>0)
                 {!! $biodata->mst_biodata->ref_kota_ortu->nama !!}
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
            <td>Nama Ibu</td>
            <td>
                 {!! $biodata->mst_biodata->nama_ortu_ibu !!}
             </td>
          </tr>  


           <tr>
            <td>Tgl lahir Ibu</td>
            <td>
                 {!! Fungsi::date_to_tgl($biodata->mst_biodata->tgl_lahir_ibu) !!}
             </td>
          </tr>  


           <tr>
            <td>Pendidikan terakhir Ibu</td>
            <td>
              @if(count($biodata->mst_biodata->ref_pendidikan_ibu)>0)
                 {!! $biodata->mst_biodata->ref_pendidikan_ibu->nama !!}
                @else
                 -
                @endif
             </td>
          </tr>  



           <tr>
            <td>Penghasilan Ayah</td>
            <td>
              @if(count($biodata->mst_biodata->ref_penghasilan_ayah)>0)
                 {!! $biodata->mst_biodata->ref_penghasilan_ayah->nama !!}
                @else
                 -
                @endif
             </td>
          </tr>  

           <tr>
            <td>Penghasilan Ibu</td>
            <td>
              @if(count($biodata->mst_biodata->ref_penghasilan_ibu)>0)
                 {!! $biodata->mst_biodata->ref_penghasilan_ibu->nama !!}
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
            <td>Pekerjaan Ayah</td>
            <td>
              @if(count($biodata->mst_biodata->ref_pekerjaan_ortu_ayah)>0)
                 {!! $biodata->mst_biodata->ref_pekerjaan_ortu_ayah->nama !!}
                @else
                 -
                @endif
             </td>
          </tr>  



           <tr>
            <td>Pekerjaan Ibu</td>
            <td>
              @if(count($biodata->mst_biodata->ref_pekerjaan_ortu_ibu)>0)
                 {!! $biodata->mst_biodata->ref_pekerjaan_ortu_ibu->nama !!}
                @else
                 -
                @endif
             </td>
          </tr>  

           <tr>
            <td>No HP Ortu</td>
            <td>
                 {!! $biodata->mst_biodata->no_hp_ortu !!}
             </td>
          </tr>  


           <tr>
            <td>Status Ayah</td>
            <td>
              @if($biodata->mst_biodata->ket_ortu_ayah == 'hidup')
                  masih hidup
                @else
                  sudah meninggal
                @endif
             </td>
          </tr>  

           <tr>
            <td>Status Ibu</td>
            <td>
              @if($biodata->mst_biodata->ket_ortu_ibu == 'hidup')
                  masih hidup
                @else
                  sudah meninggal
                @endif
             </td>
          </tr>  


    </table>



   </div>
  </div>
</div>

 