
		<div id="infoMessage"><center><?php echo $message;?></center></div>

		<?php echo form_open('reset/' . $code);?>

			<div class="card">
                  <div class="body">
                  <form id="sign_in" method="POST">
                        <div class="msg"></div>
                        <div class="input-group">
							<span class="input-group-addon">
								<i class="material-icons">lock</i>
							</span>
							<div class="form-line">
								<input type="password" class="form-control" name="new_password"  id="new_password" minlength="8" placeholder="Password" required>
							</div>
						</div>
						<div class="input-group">
							<span class="input-group-addon">
								<i class="material-icons">lock</i>
							</span>
							<div class="form-line">
								<input type="password" class="form-control" name="new_password_confirm" id="new_password_confirm" minlength="8" placeholder="Confirm Password" required>
							</div>
						</div>
						<?php echo form_input($user_id);?>
						<?php echo form_hidden($csrf); ?>
                        <div class="row">
                              <div class="col-xs-8 p-t-5">
                                    <a href="<?php echo base_url(); ?>login">Login Page</a>
                              </div>
                              <div class="col-xs-4">
                              	<button class="btn btn-block bg-pink waves-effect" type="submit">CHANGE</button>
                              </div>
                        </div>
                  </form>
                  </div>
            </div>

		<?php echo form_close();?>