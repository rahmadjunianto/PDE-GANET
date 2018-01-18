<!--========================= Content Wrapper ==============================-->
<div class="container">
 
    <div class="well">
    <?php if((empty($tampildata)))
    {
        
?><h4 class="alert alert-danger" style="text-align: center">No tiket tidak tersedia</h4>
       
<?php
        }?>
                <?php if(isset($tampildata)){
                foreach($tampildata as $row){
                    ?> 
        <h4 class="alert alert-info" style="text-align: center">Detail</h4>
        <div class="row-fluid">
        
                    <div class="span12">
                        <dl >
                            <table>
                                <tr>
                                    <td>No Tiket</td>
                                    <td>:</td>
                                    <td style='font-weight: bold;'><?php echo $row->no_tiket?></td>
                                </tr>
                                  <tr>
                                    <td>Tanggal Lapor</td>
                                    <td>:</td>
                                    <td><?php echo date("d M Y",strtotime($row->tgl_lapor));?></td>
                                </tr>
                                <tr>
                                    <td>Nama Pelapor</td>
                                    <td>:</td>
                                    <td><u><b><?php echo $row->nama_pelapor;?></b></u></td>
                                </tr>
                                                                <tr>
                                    <td>Media</td>
                                    <td>:</td>
                                    <td><?php echo $row->media?></td>
                                </tr>
                                  <tr>
                                    <td>Instansi</td>
                                    <td>:</td>
                                    <td><?php echo $row->nm_ins?></td>
                                </tr>
                                <tr>
                                    <td>Keterangan</td>
                                    <td>:</td>
                                    <td><?php echo $row->keterangan?></td>
                                </tr>

                                <tr>
                                    <td>Status</td>
                                    <td>:</td>
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
                                </tr>                                                                
                            </table>
                        </dl>
                    </div>

        </div>

                        <div class="well">
       
        <div class="row-fluid"> 
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Masalah</th>
                    <th>Solusi</th>
                    <th>Entri</th>
                    
                </tr>
                </thead>
                <tbody>
                <?php
                $no=1;
                if(isset($tampildetaildata)){
                    foreach($tampildetaildata as $row ){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>

                            <td><?php echo $row->tgl_repair?></td>
                            <td><?php echo $row->masalah?></td>
                            <td><?php echo $row->solusi?></td>
                            <td><?php echo $row->nama;?></td>
                            <td><?php echo $row->team;?></td>
                        </tr>
                    <?php }
                }
                ?>
                </tbody>
            </table>

            <div class="form-actions">
                <a href="<?php echo site_url('home')?>" class="btn btn-inverse">
                    <i class="icon-circle-arrow-left icon-white"></i> Back
                </a>
            </div>
        </div>
    </div>

                <?php }
            }
            ?>
    </div>





</div>



