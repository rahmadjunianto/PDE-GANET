
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
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo base_url();?>backend/form_laporan_masalah/insert_data_masalah" method="post">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal Lapor
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date" id="first-name" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo date("Y-m-d"); ?>" name="tanggal">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">No Tiket</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name"  class="form-control col-md-7 col-xs-12" type="text" name="kdtiket" value="<?php echo "$kd"; ?>" readonly >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nama Pelapor</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="nnmpelapor" value="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Media</label>
                        <div class="col-md-6 col-sm-9 col-xs-12">
                          <select class="form-control" name="media">
                          <option></option>
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
                            <option></option>

                            <?php
    if(isset($instansi)){
        foreach($instansi as $row){
            ?> 
           <option value="<?php echo $row->id_ins ?>"><?php echo $row->nm_ins ?></option>
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
                            data-parsley-validation-threshold="10"></textarea>
                        </div>
                      </div>

 
                                 <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pilih Teknisi</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="m form-control" multiple="multiple" name="teknisi[]" required="">
                            <option value="">Choose option</option>

                            <?php
    if(isset($teknisi)){
        foreach($teknisi as $row){
            ?>
           <option value="<?php echo $row->nama ?>"><?php echo $row->nama ?></option>
        <?php }
    }
    ?> 
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                       
                        <input type="radio" class="flat" name="status" id="genderM" value="1" checked="" required /> Belum dikerjakan
                        <input type="radio" class="flat" name="status" id="genderF" value="2" checked="" required/> Proses
                     </div>

                          </div>
                      <div class="ln_solid"></div>

                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success" >Submit</button>
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
