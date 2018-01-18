
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>

                    <table id="datatable-buttons" class="table table-striped table-bordered">
   <thead>
                        <tr>
                          <th >No</th>
                          <th width="60">No Tiket</th> 
                          <th class="span4">Tgl Lapor</th>
                          <th>Instansi</th>
                          <th>Pelapor</th>
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
    if(isset($tampilteknisi)){
        foreach($tampilteknisi as $row){
            ?>
            <tr class="gradeX">
             <td ><?php echo $i++; ?></td>
                <td >  <center><?php echo $row->no_tiket ?></center></td>
                <td ><?php echo $row->tgl_lapor  ?></td>
                <td><?php echo $row->nm_ins ?></td>
                <td><?php echo $row->nama_pelapor ?></td>
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

                    <?php if ($row->nm_status=='belum dikerjakan') {?>
<a class="btn btn-mini btn-primary" href="<?php $a=$row->id_masalah; echo base_url('backend/form_teknisi/page_detail_masalah/'.$a);?>"> <i class="fa fa fa-th-list btn-primary"></i></a>     
         <a class="btn btn-mini btn-warning" href="<?php $a=$row->id_masalah; echo base_url('backend/form_teknisi/page_tindakan_masalah/'.$a);?>"> <i class="fa fa-location-arrow btn-warning"></i></a>   

                    <?php } elseif (($row->nm_status=='proses')||($row->nm_status=='pending')) {
?>
<a class="btn btn-mini btn-primary" href="<?php $a=$row->id_masalah; echo base_url('backend/form_teknisi/page_detail_masalah/'.$a);?>"> <i class="fa fa fa-th-list btn-primary"></i></a>     
         <a class="btn btn-mini btn-warning" href="<?php $a=$row->id_masalah; echo base_url('backend/form_teknisi/page_tindakan_masalah/'.$a);?>"> <i class="fa fa-location-arrow btn-warning"></i></a>   

<?php } elseif (($row->nm_status=='fix')||($row->nm_status=='selesai')) {
?>
                    <a class="btn btn-mini btn-primary" href="<?php $a=$row->id_masalah; echo base_url('backend/data_masalah/page_detail_masalah/'.$a);?>"> <i class="fa fa fa-th-list btn-primary"></i></a>
<?php }?>


               
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
        <!-- /page content -->