<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login Ganet </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>backend/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>backend/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="https://colorlib.com/polygon/gentelella/css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>backend/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body> 
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
                              <!-- NOTIF -->
            <?php
            $message = $this->session->flashdata('notif');
            if($message){
                echo '<p class="alert alert-danger text-center">'.$message .'</p>';
            }?>
          <section class="login_content">
            
              <h1>Silahkan Pilih Bagian untuk Login</h1>
              <div class="x_content">
            <!-- <center>
<table  border="0"> 
        <td>

            <a class="btn btn-app2" href="<?php echo base_url('login/msklogin')?>"  ></i> <h3>Jaringan </h3>
                <img src="<?php echo base_url('asset_frontend/projects_but.png')?>" alt="">
            </a>
            <br>
            <a class="btn btn-app2" href="<?php echo base_url('login/mskloginlpse')?>"  ></i> <h3>LPSE </h3>
                <img src="<?php echo base_url('asset_frontend/lpse.png')?>" alt="">
            </a>
        
    </td>
    
   
</table> 
</center>-->
                    
<a class="btn btn-app" href="<?=base_url()?>login/jaringan">
                      <i class="fa fa-users" ></i> Jaringan
                    </a>
                    
<a class="btn btn-app" href="<?=base_url()?>login/lpse">
                      <i class="fa fa-building-o" ></i> LPSE
                    </a>
                  </div>
              <div class="clearfix"></div>

            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>