
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>


 

<?php if ($this->session->userdata('LEVEL')=='2') {
        if ($this->session->userdata('KATEGORI')=='1') { ?>

                  <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Masalah (Laporan Gangguan Internet)</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table id="datatable-buttons" class="table table-striped table-bordered">
   <thead>
                        <tr>
                          <th >No</th>
                          <th width="60">No Tiket</th> 
                          <th>Pelapor</th>
                          
                          <th>Instansi</th>
                          <th class="span4">Tgl Lapor</th>
                          <th>Media</th>
                          <th>Keterangan</th>
                          <th>Status</th>
                          <th width="160"><center>Aksi</center>
                          </th>
                        </tr>
                              </thead> 
                            <tbody>
                            
<?php
$i=1;
    if(isset($tampildata)){
        foreach($tampildata as $row){
            ?>
            <tr class="gradeX">
             <td ><?php echo $i++; ?></td>
                <td >  <center><?php echo $row->no_tiket ?></center></td>
                <td><?php echo $row->nama_pelapor ?></td>
                
                <td><?php echo $row->nm_ins ?></td>
                <td ><?php echo $row->tgl_lapor  ?></td>
                <td><?php echo $row->media ?></td>
                <td><?php echo $row->keterangan ?></td>
                <?php 
                  if ($row->nm_status=='proses') {
                   echo "<td style='color: blue;font-weight: bold;'>".$row->nm_status."</td>";
                  } elseif($row->nm_status=='selesai') {
                    echo "<td style='color: #40FF00;font-weight: bold;'>".$row->nm_status."</td>";
                  }elseif ($row->nm_status=='fix') {
                    echo "<td style='color: green;font-weight: bold;'>".$row->nm_status."</td>";
                  }elseif ($row->nm_status=='pending') {
                    echo "<td style='color: #00BFFF;font-weight: bold;'>".$row->nm_status."</td>";
                  }                  else  {
                    echo "<td style='color: red;font-weight: bold;'>".$row->nm_status."</td>";
                  }
                   
                ?>
        <td ><center>
        <?php 
          if ($this->session->userdata('LEVEL')==1) {?>
                    <?php if ($row->nm_status=='belum dikerjakan') {?>
                     <a class="btn btn-mini btn-warning" href="<?php $a=$row->id_masalah; echo base_url('backend/data_masalah/page_edit_masalah/'.$a);?>"> <i class="fa fa fa-edit btn-warning"></i></a>  
                    <a class="btn btn-mini btn-primary" href="<?php $a=$row->id_masalah; echo base_url('backend/data_masalah/page_detail_masalah/'.$a);?>"> <i class="fa fa fa-th-list btn-primary"></i></a>            
                    <a class="btn btn-mini btn-danger " href="<?php $a=$row->id_masalah; echo base_url('backend/data_masalah/hapus_data_masalah/'.$a);?>" onclick="return confirm('Anda yakin?')"> <i class="fa fa-trash btn-danger"></i></a>
                    

                    <?php } elseif (($row->nm_status=='proses')||($row->nm_status=='pending')||($row->nm_status=='selesai')) {
?>
                     <a class="btn btn-mini btn-warning" href="<?php $a=$row->id_masalah; echo base_url('backend/data_masalah/page_edit_masalah/'.$a);?>"> <i class="fa fa fa-edit btn-warning"></i></a>  
                    <a class="btn btn-mini btn-primary" href="<?php $a=$row->id_masalah; echo base_url('backend/data_masalah/page_detail_masalah/'.$a);?>"> <i class="fa fa fa-th-list btn-primary"></i></a>            
                    <a class="btn btn-mini btn-success " href="<?php $a=$row->id_masalah; echo base_url('backend/data_masalah/lock_data_masalah/'.$a);?>" onclick="return confirm('Anda yakin?')"> <i class="fa fa-lock btn-success"></i></a>

<?php } elseif (($row->nm_status=='fix')) {
?>
                    <a class="btn btn-mini btn-primary" href="<?php $a=$row->id_masalah; echo base_url('backend/data_masalah/page_detail_masalah/'.$a);?>"> <i class="fa fa fa-th-list btn-primary"></i></a>
<?php }?>
          <?php } else {?>
<a class="btn btn-mini btn-primary" href="<?php $a=$row->id_masalah; echo base_url('backend/data_masalah/page_detail_masalah/'.$a);?>"> <i class="fa fa fa-th-list btn-primary"></i></a>        
            <?php } ?>
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
        <?php } elseif ($this->session->userdata('KATEGORI')=='2') { ?>
 <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Masalah LPSE</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table id="datatable-buttons" class="table table-striped table-bordered">
   <thead>
                        <tr>
                        <th>No</th>
                          <th width="60">No Tiket</th>
                          <th>Pelapor</th>
                          
                          <th>Instansi</th>
                          <th class="span4">Tgl Lapor</th>
                          <th>Media</th>
                          <th>Keterangan</th>
                          <th>Status</th>
                          <th width="140"><center>Aksi</center>
                          </th>
                        </tr>
                              </thead> 
                              <tbody>
<?php
$i=1;
    if(isset($tampildatalpse)){
        foreach($tampildatalpse as $row){
            ?>
            <tr class="gradeX">
                <td ><?php echo $i++; ?></td>
                <td >  <center><?php echo $row->no_tiket ?></center></td>
                <td><?php echo $row->nama_pelapor ?></td>
               
                <td><?php echo $row->nm_ins ?></td>
                 <td ><?php echo $row->tgl_lapor  ?></td>
                <td><?php echo $row->media ?></td>
                <td><?php echo $row->keterangan ?></td>
<?php 
                  if ($row->nm_status=='proses') {
                   echo "<td style='color: blue;font-weight: bold;'>".$row->nm_status."</td>";
                  } elseif($row->nm_status=='selesai') {
                    echo "<td style='color: #40FF00;font-weight: bold;'>".$row->nm_status."</td>";
                  }elseif ($row->nm_status=='fix') {
                    echo "<td style='color: green;font-weight: bold;'>".$row->nm_status."</td>";
                  }elseif ($row->nm_status=='pending') {
                    echo "<td style='color: #00BFFF;font-weight: bold;'>".$row->nm_status."</td>";
                  }                  else  {
                    echo "<td style='color: red;font-weight: bold;'>".$row->nm_status."</td>";
                  }
                  
                ?>
        <td ><center>
        <?php 
          if ($this->session->userdata('LEVEL')==5) {?>
         <a class="btn btn-mini btn-warning" href="<?php $a=$row->id_masalah; echo base_url('backend/data_lpse/page_edit_masalah_lpse/'.$a);?>"> <i class="fa fa fa-edit btn-warning"></i></a>  
                    <a class="btn btn-mini btn-primary" href="<?php $a=$row->id_masalah; echo base_url('backend/data_lpse/page_detail_masalah_lpse/'.$a);?>"> <i class="fa fa fa-th-list btn-primary"></i></a>            
               <a class="btn btn-mini btn-danger " href="<?php $a=$row->id_masalah; echo base_url('backend/data_lpse/hapus_data_masalah_lpse/'.$a);?>"
               onclick="return confirm('Anda yakin?')"> <i class="fa fa-trash btn-danger"></i></a>
            <?php
          } else {?>
<a class="btn btn-mini btn-primary" href="<?php $a=$row->id_masalah; echo base_url('backend/data_lpse/page_detail_masalah_lpse/'.$a);?>"> <i class="fa fa fa-th-list btn-primary"></i></a>        
            <?php } ?>
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


  <?php } 
  
} else { ?>
                <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Masalah (Laporan Gangguan Internet)</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table id="datatable-buttons" class="table table-striped table-bordered">
   <thead>
                        <tr>
                          <th >No</th>
                          <th width="60">No Tiket</th> 
                          <th>Pelapor</th>
                          <th class="span4">Tgl Lapor</th>
                          <th>Instansi</th>
                          
                          <th>Media</th>
                          <th>Keterangan</th>
                          <th>Status</th>
                          <th width="160"><center>Aksi</center>
                          </th>
                        </tr>
                              </thead> 
                            <tbody>
                            
<?php
$i=1;
    if(isset($tampildata)){
        foreach($tampildata as $row){
            ?>
            <tr class="gradeX">
             <td ><?php echo $i++; ?></td>
                <td >  <center><?php echo $row->no_tiket ?></center></td>
                 <td><?php echo $row->nama_pelapor ?></td>
                <td ><?php echo $row->tgl_lapor  ?></td>
                <td><?php echo $row->nm_ins ?></td>
               
                <td><?php echo $row->media ?></td>
                <td><?php echo $row->keterangan ?></td>
                <?php 
                  if ($row->nm_status=='proses') {
                   echo "<td style='color: blue;font-weight: bold;'>".$row->nm_status."</td>";
                  } elseif($row->nm_status=='selesai') {
                    echo "<td style='color: #40FF00;font-weight: bold;'>".$row->nm_status."</td>";
                  }elseif ($row->nm_status=='fix') {
                    echo "<td style='color: green;font-weight: bold;'>".$row->nm_status."</td>";
                  }elseif ($row->nm_status=='pending') {
                    echo "<td style='color: #00BFFF;font-weight: bold;'>".$row->nm_status."</td>";
                  }                  else  {
                    echo "<td style='color: red;font-weight: bold;'>".$row->nm_status."</td>";
                  }
                  
                ?>
        <td ><center>
        <?php 
          if ($this->session->userdata('ID')==1) {?>
                    <?php if ($row->nm_status=='belum dikerjakan') {?>
                     <a class="btn btn-mini btn-warning" href="<?php $a=$row->id_masalah; echo base_url('backend/data_masalah/page_edit_masalah/'.$a);?>"> <i class="fa fa fa-edit btn-warning"></i></a>  
                    <a class="btn btn-mini btn-primary" href="<?php $a=$row->id_masalah; echo base_url('backend/data_masalah/page_detail_masalah/'.$a);?>"> <i class="fa fa fa-th-list btn-primary"></i></a>            
                    <a class="btn btn-mini btn-danger " href="<?php $a=$row->id_masalah; echo base_url('backend/data_masalah/hapus_data_masalah/'.$a);?>" onclick="return confirm('Anda yakin?')"> <i class="fa fa-trash btn-danger"></i></a>

                    <?php } elseif (($row->nm_status=='proses')||($row->nm_status=='pending')) {
?>
                     <a class="btn btn-mini btn-warning" href="<?php $a=$row->id_masalah; echo base_url('backend/data_masalah/page_edit_masalah/'.$a);?>"> <i class="fa fa fa-edit btn-warning"></i></a>  
                    <a class="btn btn-mini btn-primary" href="<?php $a=$row->id_masalah; echo base_url('backend/data_masalah/page_detail_masalah/'.$a);?>"> <i class="fa fa fa-th-list btn-primary"></i></a>            
                    <a class="btn btn-mini btn-success " href="<?php $a=$row->id_masalah; echo base_url('backend/data_masalah/lock_data_masalah/'.$a);?>" onclick="return confirm('Anda yakin?')"> <i class="fa fa-lock btn-success"></i></a>

<?php } elseif (($row->nm_status=='fix')||($row->nm_status=='selesai')) {
?>
                    <a class="btn btn-mini btn-primary" href="<?php $a=$row->id_masalah; echo base_url('backend/data_masalah/page_detail_masalah/'.$a);?>"> <i class="fa fa fa-th-list btn-primary"></i></a>
<?php }?>
          <?php } else {?>
<a class="btn btn-mini btn-primary" href="<?php $a=$row->id_masalah; echo base_url('backend/data_masalah/page_detail_masalah/'.$a);?>"> <i class="fa fa fa-th-list btn-primary"></i></a>        
            <?php } ?>
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
  <?php
}
 ?>
            </div>
          </div>
        </div>
        <!-- /page content -->

        