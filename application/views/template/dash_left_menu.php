        <section>
            <!-- Left Sidebar -->
            <aside id="leftsidebar" class="sidebar">
                <!-- User Info -->
                <div class="user-info">
                    <div class="image" style="">
                        <img src="<?php echo base_url(); ?>assets/origin/images/<?php if($detail->avatar != null)
                        {echo $detail->avatar;} else{echo "user.png";} ?>" width="48" height="48" alt="User" />
                    </div>
                    <div class="info-container">
                        <div class="name"><?php echo $name ?></div>
                        <div class="email"><?php echo $email ?></div>
                    </div>
                </div>
                <!-- #User Info -->

                <!-- Menu -->
                <div class="menu">
                    <ul class="list">
                        <li class="header">MAIN NAVIGATION</li>
                        <li class="<?php echo ($activeTab=="home")?"active":""; ?>">
                            <a href="<?php echo base_url();?>dashboard">
                                <i class="material-icons">home</i>
                                <span>Home</span>
                            </a>
                        </li>

                        <?php if($this->ion_auth->is_admin()): ?>
                            <li class="<?php echo ($activeTab=="setting")?"active":""; ?>">
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <i class="material-icons">settings</i>
                                    <span>Settings</span>
                                </a>
                                <ul class="ml-menu">
                                    <li class="<?php echo ($activeTab2=="sett_general")?"active":""; ?>" >
                                        <a  href="<?php echo base_url();?>dashboard/setting/general">General</a>
                                    </li>
                                    <li class="<?php echo ($activeTab2=="sett_user")?"active":""; ?>">
                                        <a  href="<?php echo base_url();?>dashboard/setting/user">User Management</a>
                                    </li>
                                </ul>
                            </li>
                        <?php endif ?>

                        <?php if(!$this->ion_auth->is_admin()): ?>
                            <li class="<?php echo ($activeTab=="")?"active":""; ?>">
                                <a href="<?php echo base_url();?>dashboard/">
                                    <i class="material-icons">account_box</i>
                                    <span>Profile</span>
                                </a>
                            </li>
                            <li class="<?php echo ($activeTab=="")?"active":""; ?>">
                                <a href="<?php echo base_url();?>dashboard/">
                                    <i class="material-icons">history</i>
                                    <span>History</span>
                                </a>
                            </li>
                        <?php endif ?>


                    </ul>
                </div>
                <!-- #Menu -->
                <!-- Footer -->
                <div class="legal">
                    <div class="copyright">

                        &copy; 2017 <a href="<?php echo base_url();?>" target="_blank"> <?php echo $sett[0]["value"] ?> </a>by  <a href="https://asmith.my.id" target="_blank">Asmith App.</a>
                    </div>
                    <div class="version">
                        <b>Dashboard design by: </b> <a href="https://github.com/gurayyarar" target="_blank">Güray Yarar</a>
                    </div>
                </div>
                <!-- #Footer -->
            </aside>
            <!-- #END# Left Sidebar -->
        </section>
