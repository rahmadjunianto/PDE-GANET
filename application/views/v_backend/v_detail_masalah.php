
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>


              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Detail Masalah (Laporan Gangguan Internet)</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo base_url();?>backend/form_laporan_masalah/update_data_masalah" method="post">
                            <?php
    if(isset($tampildata)){
        foreach($tampildata as $m){ 
            ?> 
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal Lapor
                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" value="<?php 
                          $a=substr("$m->tgl_lapor",0, 10); echo $m->tgl_lapor  ?>" name="tanggal" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">No Tiket</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name"  class="form-control col-md-7 col-xs-12" type="text" name="kdtiket" value="<?php echo $m->no_tiket;?>" readonly >
<input id="middle-name"  class="form-control col-md-7 col-xs-12" type="hidden" name="id_masalah" value="<?php echo $m->id_masalah;?>" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nama Pelapor</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="nnmpelapor" value="<?php echo $m->nama_pelapor;?>"readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Media</label>
                        <div class="col-md-6 col-sm-9 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="nnmpelapor" value="<?php echo $m->media;?>"readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Instansi</label>
                        <div class="col-md-6 col-sm-9 col-xs-12">
<input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="nnmpelapor" value="<?php echo $m->nm_ins;?>"readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Masalah</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="message" required="required" class="form-control" name="ket" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                            data-parsley-validation-threshold="10" readonly><?php echo $m->keterangan;
?></textarea>
                        </div>
                      </div>
                      

                                 <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Teknisi</label>
                        <div class="col-md-6 col-sm-9 col-xs-12">
                           <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="nnmpelapor" value="<?php echo $m->teknisi;?>"readonly>
                            
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
                        <div class="col-md-6 col-sm-9 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="nnmpelapor" value="<?php echo $m->nm_status;?>"readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        
        <?php }
    }
    ?>
                    <!--    </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
                            </label>
                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="female"> Female
                            </label>-->
                          </div>
                      <div class="ln_solid"></div>

 

                    </form>
                    <table id="detail_masalah" class="table table-striped table-bordered">
   <thead>
                        <tr>
                          <th width="60">No</th>
                          <th class="span4">Tanggal Repair</th>
                          <th>Masalah</th>
                          <th>Solusi</th>
                          <th>Entri</th>
                          <th>Team</th>
                        </tr>
                              </thead>
                              <tbody>
<?php
    if(isset($tampildetaildata)){
      $i=1;
        foreach($tampildetaildata as $row){
            ?>
            <tr class="gradeX">
                <td ><?php echo $i++;?></td>
                <td ><?php echo $row->tgl_repair  ?></td>
                <td><?php echo $row->masalah ?></td>
                <td><?php echo $row->solusi ?></td>
                <td><?php echo $row->nama ?></td>
                <td><?php echo $row->team ?></td>
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
