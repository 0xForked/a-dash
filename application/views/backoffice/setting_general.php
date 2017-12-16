    <section class="content">
        <div class="container-fluid">

            <div class="block-header">
                <ol class="breadcrumb">
                    <li><a href="javascript:void(0);"><i class="material-icons">settings_applications</i> Setting</a></li>
                    <li class="active"><i class="material-icons">account_circle</i> Account</li>
                </ol>
            </div>

            <div class="row clearfix">

                 <!-- User Info -->
                 <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="header">
                            <h2>Account</h2>
                        </div>
                        <div class="body">
                            <div style="text-align:center">
                                <label for="profile_pic">
                                    <input type="file" name="profile_pic" id="profile_pic" style="display:none;" onchange="readIMG01(this);"/>
                                    <img alt="profile_picture" id="_pic" name="_pic" src="<?php echo base_url(); ?>assets/origin/images/<?php if($detail->avatar != null)
                                    {echo $detail->avatar;} else{echo "user.png";} ?>" height="90px" width="90px" class="img-circle"/>
                                </label>

                            </div>


                            <div class="form-group form-float" style="margin-top:30px">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i>@</i>
                                    </span>
                                    <div class="form-line disabled " style="margin-left:5px">
                                        <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $user->username ?>" disabled >
                                    </div>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">email</i>
                                    </span>
                                    <div class="form-line disabled ">
                                        <input type="email" class="form-control" name="email" placeholder="Email Address" value="<?php echo $user->email ?>" disabled>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-block btn-lg btn-primary waves-effect">SAVE CHANGES</button>
                        </div>
                    </div>
                </div>

                <!-- User Info -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="header" >
                            <h2>Details</h2>

                        </div>
                        <div class="body">
                        <?php echo form_open_multipart(''); ?>
                            <form id="form_validation" method="POST">
                                <div class="form-group form-float">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="full_name" placeholder="Full Name" value="<?php echo $detail->full_name ?>"  required >
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">phone</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="phone" placeholder="Phone Number" value="<?php echo $detail->phone ?>" required >
                                        </div>

                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">business</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="company_name" placeholder="Company (e.g. R.S. Samaran)" value="<?php echo $detail->company ?>"  required>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">group</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="company_position" placeholder="Positin (e.g. Doctor)" value="<?php echo $detail->position ?>"  required>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-block btn-lg btn-primary waves-effect">SAVE CHANGES</button>
                            </form>
                            <!-- Flash messages -->
                            <?php if($this->session->flashdata('category_created')): ?>
                                <?php
                                    echo '<div class="alert bg-green alert-dismissible" style="margin-top:10px" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'.$this->session->flashdata('category_created').'</div>'
                                ?>
                            <?php endif; ?>
                        <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>

                <!-- User Info -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="header">
                            <h2>Change password</h2>
                        </div>
                        <div class="body">
                        <?php echo form_open_multipart(''); ?>
                            <form id="form_validation" method="POST">
                                <div class="form-group form-float">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">lock</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="password" class="form-control" name="password" minlength="6" placeholder="Old Password" required>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">lock</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="password" class="form-control" name="password" minlength="6" placeholder="New Password" required>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">lock</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="password" class="form-control" name="password_confirm" minlength="6" placeholder="Confirm New Password" required>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-block btn-lg btn-primary waves-effect">SAVE CHANGE</button>
                            </form>
                            <!-- Flash messages -->
                            <?php if($this->session->flashdata('category_created')): ?>
                                <?php
                                    echo '<div class="alert bg-green alert-dismissible" style="margin-top:10px" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'.$this->session->flashdata('category_created').'</div>'
                                ?>
                            <?php endif; ?>
                        <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>

             </div>

             <div class="block-header">
                <ol class="breadcrumb ">
                    <li><a href="javascript:void(0);"><i class="material-icons">settings_applications</i> Setting</a></li>
                    <li class="active"><i class="material-icons">web</i> Web App</li>
                </ol>
            </div>

             <div class="row clearfix">
                 <!-- User Info -->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="header">
                            <h2>Site Config</h2>
                        </div>
                        <div class="body">
                        <?php echo form_open_multipart(''); ?>
                            <form id="form_validation" method="POST">
                                <div class="form-group form-float">

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">business</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="site_name" placeholder="Site Name" value=" <?php echo $sett[0]["value"] ?>" required >
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">description</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="site_name" placeholder="Site description" value=" <?php echo $sett[1]["value"] ?>" required >
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">email</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="site_name" placeholder="Site office email" value=" <?php echo $sett[2]["value"] ?>" required >
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">phone</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="site_name" placeholder="Site office number" value=" <?php echo $sett[3]["value"] ?>" required >
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">place</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="site_name" placeholder="Site office address" value=" <?php echo $sett[4]["value"] ?>" required >
                                        </div>
                                    </div>

                                </div>

                                <button type="submit" class="btn btn-block btn-lg btn-primary waves-effect">SAVE CHANGES </button>
                            </form>
                            <!-- Flash messages -->
                            <?php if($this->session->flashdata('category_created')): ?>
                                <?php
                                    echo '<div class="alert bg-green alert-dismissible" style="margin-top:10px" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'.$this->session->flashdata('category_created').'</div>'
                                ?>
                            <?php endif; ?>
                        <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="header">
                            <h2>App Config</h2>
                        </div>
                        <div class="body">
                        <?php echo form_open_multipart(''); ?>
                            <form id="form_validation" method="POST">
                                <div class="form-group form-float">
                                <table class="table  table-hover ">
                                    <tbody>
                                        <tr>
                                            <td>Maintenance Mode</td>
                                            <td>
                                                <?php $maintenance = $sett[5]["value"] ?>

                                                <div class="switch" style="text-align:right">
                                                    <label>
                                                        <?php $status = $maintenance;
                                                            if($status == "Y") {
                                                                echo "Active";
                                                            }else {
                                                                echo "Disable";
                                                            }
                                                        ?>
                                                    <input type="checkbox" name="siteStatus"
                                                        <?php $status = $maintenance;
                                                            if($status == "Y") {
                                                                echo "checked";
                                                            }
                                                        ?>
                                                    ><span class="lever"></span></label>
                                                </div>


                                            </td>
                                        </tr>

                                    </tbody>
                                </table>

                                </div>
                                <button type="submit" class="btn btn-block btn-lg btn-primary waves-effect">SAVE CHANGE </button>
                            </form>
                            <!-- Flash messages -->
                            <?php if($this->session->flashdata('category_created')): ?>
                                <?php
                                    echo '<div class="alert bg-green alert-dismissible" style="margin-top:10px" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'.$this->session->flashdata('category_created').'</div>'
                                ?>
                            <?php endif; ?>
                        <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
             </div>

             <div class="block-header">
                <ol class="breadcrumb ">
                    <li><a href="javascript:void(0);"><i class="material-icons">settings_applications</i> Setting</a></li>
                    <li class="active"><i class="material-icons">stay_primary_portrait</i> Mobile App</li>
                </ol>
            </div>

            <div class="row clearfix">
                <!-- User Info -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="header">
                            <h2>Push Notification</h2>
                        </div>
                        <div class="body">
                        <?php echo form_open_multipart(''); ?>
                            <form id="form_validation" method="POST">
                                <div class="form-group form-float">

                                    <select class="form-control show-tick">
                                        <option value="">-- Please select target--</option>
                                        <option value="dokter">Dokter</option>
                                        <option value="perawat">Perawat</option>
                                        <option value="pasien">Pasien</option>
                                        <option value="semua">Semua</option>
                                    </select>

                                    <div class="input-group" style="margin-top:20px">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="password" minlength="6" placeholder="Title" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="4" class="form-control no-resize" placeholder="Type messages here..."></textarea>
                                        </div>
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-block btn-lg btn-primary waves-effect">SAVE CHANGE</button>
                            </form>
                            <!-- Flash messages -->
                            <?php if($this->session->flashdata('category_created')): ?>
                                <?php
                                    echo '<div class="alert bg-green alert-dismissible" style="margin-top:10px" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'.$this->session->flashdata('category_created').'</div>'
                                ?>
                            <?php endif; ?>
                        <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

                <!--images JavaScript fix-->
                <script>
                    function readIMG01(input) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();

                            reader.onload = function (e) {
                                $('#_pic')
                                    .attr('src', e.target.result)
                                    .width(90)
                                    .height(90);
                            };
                            reader.readAsDataURL(input.files[0]);
                        }
                    }
                </script>
                <!--images-->