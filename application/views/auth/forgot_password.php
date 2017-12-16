
 <div id="infoMessage" ><center> <?php echo $message;?> </center></div>
      <?php echo form_open("forgot");?>


            <div class="card">
                  <div class="body">
                  <form id="sign_in" method="POST">
                        <div class="msg"><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></div>
                        <div class="input-group">
                              <span class="input-group-addon">
                              <i class="material-icons">person</i>
                              </span>
                              <div class="form-line">
                              <input type="text" class="form-control" name="identity" placeholder="Email" required autofocus>
                              </div>
                        </div>
                        <div class="row">
                              <div class="col-xs-8 p-t-5">
                                    <a href="<?php echo base_url(); ?>login">Back to Login Page</a>
                              </div>
                              <div class="col-xs-4">
                              <button class="btn btn-block bg-pink waves-effect" type="submit">SEND</button>
                              </div>
                        </div>
                  </form>
                  </div>
            </div>

      <?php echo form_close();?>


