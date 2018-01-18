
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>


              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel"> 
                  <div class="x_title">
                    <h2>Form Tindakan Masalah LPSE</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo base_url();?>backend/form_teknisi_lpse/simpan_form_tindakan_lpse" method="post">
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Instansi Pelapor</label>
                        <div class="col-md-6 col-sm-9 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="ins" value="<?php echo $m->nm_ins;?>"readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nama Pelapor</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="nnmpelapor" value="<?php echo $m->nama_pelapor;?>" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">No HP</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="nohp" value="<?php echo $m->nohp;?>"readonly>
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">E-mail</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="email" value="<?php echo $m->email;?>"readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Masalah</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="ket" value="<?php echo $m->keterangan;?>" readonly>
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                       <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="status" value="<?php echo $m->nm_status;?>" readonly>
                  
                     </div>
        <?php }
    }
    ?>
                          </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Di input oleh</label>
                        <div class="col-md-6 col-sm-9 col-xs-12">
                      <input type="text" name="" value="<?php echo $m->nama; ?>" class="form-control col-md-7 col-xs-12" readonly>
                        </div>
                      </div>                          
                   
                        
                                            <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Deskripsi Masalah</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="d" required="required" class="form-control" style="width: 400px; height: 100px;" name="deskripsi" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                            data-parsley-validation-threshold="20"></textarea>
                        </div>
                      </div>
                        
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Solusi Masalah</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="ket2" required="required" class="form-control" style="width: 400px; height: 100px;" name="solusi" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                            data-parsley-validation-threshold="10"></textarea>
                        </div>
                      </div>
                                        
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                       
                        <input type="radio" class="flat" name="status" id="genderM" value="4" checked="" required />  Selesai   
                        <br><input type="radio" class="flat" name="status" id="genderC" value="2" />  Proses
                     </div>

                         
                      <div class="ln_solid"></div>

                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
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
