
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>


              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form User</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

       <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo base_url();?>backend/data_user/update_data_user" method="post">

                       <?php
    if(isset($tampildata)){
        foreach($tampildata as $u){
            ?>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="nama" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $u->nama;?>"> 
                                                    <input type="hidden" id="last-name" name="id" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $u->id;?>">                       
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Alamat </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="message"  class="form-control" name="alamat" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                            data-parsley-validation-threshold="10" ><?php echo $u->alamat;?></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">No.Telp </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="telp" value="<?php echo $u->telp;?>">
                        </div>
                      </div>
                      <div class="form-group"> 
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Username </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="username" value="<?php echo $u->username;?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Password </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="password" name="password" value="<?php echo $u->password;?>">
<!--<input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="passwd" value="?php echo $u->$id;?>"> -->                      
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Level</label>
                        <div class="col-md-6 col-sm-9 col-xs-12">
      <select class="select2_level form-control" name="level" >
       <option value="<?php echo $u->level ?>"><?php echo $u->nama_level?></option>
    <?php
    if(isset($level)){
        foreach($level as $row){
            ?>
           <option value="<?php echo $row->id_level ?>"><?php echo $row->nm_level ?></option>
        <?php }
    }
    ?>
                            </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Keterangan </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="message"  class="form-control" name="ket" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                            data-parsley-validation-threshold="10" value=""><?php echo $u->ket;?></textarea>
                        </div>
                      </div>

                     
                      

                          <?php }
    }
    ?>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-primary" onclick="history.back();">Cancel</button>
                          <button type="submit" class="btn btn-success">Update</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        </div>
        <!-- /page content -->