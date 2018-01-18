
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>


              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Data User</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="data-user" class="table table-striped table-bordered">
   <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Alamat</th>
                          <th>No Telp</th>
                          <th>Level</th>
                          <th>Keterangan</th>
                          <th>
                          <center>
                                <a class='btn btn-mini btn-info' href='<?php echo base_url();?>backend/data_user/page_tambah_user'>Tambah</a>
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
                <td><?php echo $row->id ?></td>
                <td><?php echo $row->nama  ?></td>
                <td><?php echo $row->alamat ?></td>
                <td><?php echo $row->telp ?></td>
                <td><?php echo $row->nama_level ?></td>
                <td><?php echo $row->ket ?></td>
                
       <td ><center>
        <?php 
          if ($this->session->userdata('ID')==1) {?>
         <a class="btn btn-mini btn-warning" href="<?php $a=$row->id; echo base_url('backend/data_user/edit_user/'.$a);?>"> <i class="fa fa fa-edit btn-warning"></i></a>  
                                
               <a class="btn btn-mini btn-danger " href="<?php $a=$row->id; echo base_url('backend/data_user/hapus_data_user/'.$a);?>"
               onclick="return confirm('Anda yakin?')"> <i class="fa fa-trash btn-danger"></i></a>
            <?php
          } ?>

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