
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>


              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Masalah (Laporan Gangguan Internet)</h2>
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
                          <input type="date" id="first-name" required="required" class="form-control col-md-7 col-xs-12" value="<?php 
                          $a=substr("$m->tgl_lapor",0, 10); echo $a  ?>" name="tanggal">
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
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="nnmpelapor" value="<?php echo $m->nama_pelapor;?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Media</label>
                        <div class="col-md-6 col-sm-9 col-xs-12">
                          <select class="form-control" name="media">
                          <option value="<?php echo $m->media;?>"><?php echo $m->media;?></option>
                <option value="Telepon">Telepon</option>
                <option value="Call center">Call center</option>
                <option value="Surat">Surat</option>
                <option value="Lainnya: ">Lainnya:</option>

                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Instansi</label>
                        <div class="col-md-6 col-sm-9 col-xs-12">
                          <select class="select2_instansi form-control" name="ins" >
                            <option value="<?php echo $m->id_ins;?>"><?php echo $m->nm_ins;?></option>

                            <?php
    if(isset($instansi)){
        foreach($instansi as $i){
            ?>
           <option value="<?php echo $i->id_ins ?>"><?php echo $i->nm_ins ?></option>
        <?php }
    }
    ?>
                            </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Keterangan</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="message" required="required" class="form-control" name="ket" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                            data-parsley-validation-threshold="10"><?php echo $m->keterangan;
?></textarea>
                        </div>
                      </div>


                                 <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pilih Teknisi</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="m form-control" multiple="multiple" name="teknisi[]" required="">
                            <?php $tek=$m->teknisi;
                            $tekn = explode(",", $tek);
      for ($i = 0; $i < count($tekn); $i++)
        { 
          echo" <option value='". $tekn[$i] ."' selected>". $tekn[$i] ."</option>" ;
        }?>
        <option>-- Pilih Teknisi --</option>
                            
                            <?php if(isset($t)){
        foreach($t as $t){ ?>

           <option value="<?php echo $t->nama ?>"><?php echo $t->nama ?></option>
        <?php }} ?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <?php 
if ($m->nm_status=='proses') {
 echo "Belum Dikerjakan <input type='radio' class='flat' name='status' id='genderM' value='1'  required /> Proses
                        <input type='radio' class='flat' name='status' id='genderF' value='2' checked=''/>";
} elseif ($m->nm_status=='belum dikerjakan') {
   echo "Belum Dikerjakan <input type='radio' class='flat' name='status' id='genderM' value='1' checked='' required /> Proses
                        <input type='radio' class='flat' name='status' id='genderF' value='2' />";
}?>
                     </div>
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

                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-primary" onclick="history.back();" >Batal</button>
                          <button type="submit" class="btn btn-success" >Simpan</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- /page content -->
