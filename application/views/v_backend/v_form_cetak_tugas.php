
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>


              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Cetak Tugas</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo base_url();?>backend/cetak_surat_tugas/cetak_surat" method="post">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Teknisi
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <select class="m form-control" multiple="multiple" name="teknisi[]" required="">
                         <!-- data terknisi dari tb_masalah--> 
                            <?php
    if(isset($tampildata)){
      $i=1;
        foreach($tampildata as $m){
            ?>
                            <?php $tek=$m->teknisi;
                            $tekn = explode(",", $tek);
      for ($i = 0; $i < count($tekn); $i++)
{
   echo" <option value='". $tekn[$i] ."' selected>". $tekn[$i] ."</option>" ;

}?>
<!-- data tb_teknisi-->                            
    <?php
    if(isset($teknisi)){
        foreach($teknisi as $t){
            ?>/
           <option value="<?php echo $t->nama ?>"><?php echo $t->nama ?></option>
        <?php }
    }
    ?>      <?php }
    }
    ?>
                          </select>
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Penanda Tangan
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" class="form-control col-md-7 col-xs-12"  name="nm_ttd" required="required">
                           <input type="hidden" id="first-name" class="form-control col-md-7 col-xs-12"  name="idmslh" value="<?php echo "$id"; ?>">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">NIP
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" class="form-control col-md-7 col-xs-12"  name="nip" required="required">
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
