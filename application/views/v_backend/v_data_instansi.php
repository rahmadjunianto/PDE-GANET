
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>


              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Data Instansi</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="data-instansi" class="table table-striped table-bordered">
   <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Instansi</th>
                          <th>Alamat Instansi</th>
                          <th>No. Telp</th>
                          <th width="140">
                            <center>
                                <a class='btn btn-mini btn-info' href='<?php echo base_url();?>backend/data_instansi/page_tambah_instansi'>Tambah Data</a>
                            </center> 
                          </th>
                          
                        </tr>
                              </thead>
                              <tbody>
                            <?php
    if(isset($tampildata)){
        foreach($tampildata as $row){
            ?>
            <tr class="gradeX">
                <td><?php echo $row->id_ins ?></td>
                <td><?php echo $row->nm_ins ?></td>
                <td><?php echo $row->almt_ins ?></td>
                <td><?php echo $row->telp_ins ?></td>
         <td ><center>
<a class="btn btn-mini btn-warning" href="<?php $a=$row->id_ins; echo base_url('backend/data_instansi/page_edit_instansi/'.$a);?>"> <i class="fa fa fa-edit btn-warning"></i></a>  
           
<a class="btn btn-mini btn-danger " href="<?php $a=$row->id_ins; echo base_url('backend/data_instansi/hapus_data_instansi/'.$a);?>"onclick="return confirm('Anda yakin?')"> <i class="fa fa-trash btn-danger"></i></a>
               </center>
        </td>
            </tr>
        <?php }
    }
    ?>
                              </tbody>
                    </table>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- /page content -->