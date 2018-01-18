       <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>


              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Cetak Tanda Terima</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                   <table id="cetak_surat" class="table table-striped table-bordered"> 
   <thead>

			<tr>
				<th>No</th>
				<th>No Tiket</th>
				<th>Tgl Lapor</th>
				<th>Instansi</th>
				<th>Pelapor</th>
				<th>Keterangan</th>
				<th></th>


			</tr>
			</thead>
			<tbody>
		<?php
    if(isset($tampildata)){
    	$i=1;
        foreach($tampildata as $row){
            ?>
            <tr class="gradeX">
               	<td><?php  echo $i++?></td>
                <td ><center><?php echo $row->no_tiket ?></center></td>
                <td ><?php echo $row->tgl_lapor  ?></td>
                <td><?php echo $row->nm_ins ?></td>
                <td><?php echo $row->nama_pelapor ?></td>
                <td><?php echo $row->keterangan ?></td>
                <input type="hidden" name="nm_ins" value="<?php echo $row->nm_ins ?>">
                <td ><center><a class="btn btn-mini btn-primary" href="<?php $a=$row->id_masalah;echo base_url("backend/tanda_terima_pekerjaan/cetak_tanda_terima/$a")?>"> <i class="fa fa-print"></i></a> </center></td>
            </tr>
        <?php }
    }
    ?>

			</tbody>
		</table>
	</div>
</div>		