            <section class="content">
                <div class="container-fluid">
                    <div class="block-header">
                        <ol class="breadcrumb breadcrumb-bg-blue-grey">
                            <li><a href="javascript:void(0);"><i class="material-icons">settings_applications</i> Setting</a></li>
                            <li class="active"><i class="material-icons">accessibility</i> User management</li>
                        </ol>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="header">
                                    <h2>
                                        User list (<?php echo $totalUser ?>)
                                    </h2>
                                </div>
                                <div class="body">
                                    <div class="table-responsive">
                                        <table class="table  table-hover ">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Group</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php $no=0; foreach($users as $user):?>
                                                    <tr>
                                                        <td><?php $no++; echo $no ?></td>
                                                        <td>
                                                            <?php foreach ($user->detail as $detail):?>
                                                               <?php echo $detail->full_name ?>
                                                            <?php endforeach?>
                                                        </td>
                                                        <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
                                                        <td>
                                                            <?php foreach ($user->groups as $group):?>
                                                                <span class="label <?php if($group->name == "admin"){echo "bg-red";}else if($group->name == "member"){echo "bg-blue-grey";}else if($group->name == "doctor"){echo "bg-blue";}else if($group->name == "nurse"){echo "bg-purple";}?>"> <a data-toggle="modal" data-tooltip="tooltip" title="Change Level!" data-target="#levelModal<?php echo $user->id  ?>" style="color:white" href="javascript:void(0);"><?php echo htmlspecialchars($group->name,ENT_QUOTES,'UTF-8') ;?></a> </span>
                                                            <?php endforeach?>
                                                        </td>
                                                        <td>

                                                            <?php $status_active = $user->active; ?>

                                                                <?php if ($status_active == 1): ?>
                                                                    <a href="javascript:void(0);" data-toggle="modal" data-tooltip="tooltip" title="Deactive user!" data-target="#deactiveModal<?php echo $user->id ?>" style="color:white"><span class="label bg-green">Active </span> </a>
                                                                <?php endif ?>

                                                                <?php if ($status_active == 0): ?>
                                                                    <a href="javascript:void(0);" style="color:white" data-toggle="modal" data-tooltip="tooltip" title="Activate user!" data-target="#activateModal<?php echo $user->id ?>"><span class="label bg-grey"> Inactive </span> </a>
                                                                <?php endif ?>

                                                        </td>

                                                        <td>

                                                            <a data-toggle="modal" data-tooltip="tooltip" title="Delete now!" data-target="#deleteModal<?php echo $user->id  ?>"><i style="color:red" class="material-icons waves-effect">delete</i></a>

                                                        </td>
                                                    </tr>

                                                    <tr><!-- deactive modal -->
                                                        <div class="modal fade" id="deactiveModal<?php echo $user->id ?>" tabindex="-1" role="dialog">
                                                                <div class="modal-dialog modal-sm" role="document">
                                                                <?php echo form_open("auth/deactivate/".$user->id);?>
                                                                    <div class="modal-content ">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="smallModalLabel">DEACTIVE USER</h4>
                                                                    </div>
                                                                    <div class="modal-body" >
                                                                        <p>Are you sure you want to deactivate the user <span style="color:red; " >'<?php echo $user->username;?>'</span></p>

                                                                        <div class="input-group" >
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" name="confirm" placeholder="Input 'yes' to deactivate this user"/>
                                                                            </div>
                                                                        </div>

                                                                        <?php echo form_hidden($csrf); ?>
                                                                        <?php echo form_hidden(array('id'=>$user->id)); ?>
                                                                    </div>

                                                                    <div class="modal-footer">
                                                                        <button class="btn btn-link bg-red waves-effect" type="submit">DEACTIVATE</button>
                                                                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CANCEL</button>
                                                                    </div>
                                                                <?php echo form_close();?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </tr><!-- deactive modal -->

                                                    <tr><!-- activate modal -->
                                                        <div class="modal fade" id="activateModal<?php echo $user->id ?>" tabindex="-1" role="dialog">
                                                                <div class="modal-dialog modal-sm" role="document">
                                                                    <div class="modal-content modal-col-blue-grey">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="smallModalLabel">ACTIVATE USER</h4>
                                                                    </div>
                                                                    <div class="modal-body" > Are you sure? </div>
                                                                    <div class="modal-footer">
                                                                        <a class="btn btn-link bg-blue waves-effect" href="<?php echo base_url()?>auth/activate/<?php echo $user->id ?>">ACTIVATE</a>
                                                                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CANCEL</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </tr><!-- activate modal -->

                                                    <tr><!-- delete modal -->
                                                        <div class="modal fade" id="deleteModal<?php echo $user->id  ?>" tabindex="-1" role="dialog">
                                                                <div class="modal-dialog modal-sm" role="document">
                                                                    <div class="modal-content modal-col-blue-grey">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="smallModalLabel">DELETE USER</h4>
                                                                    </div>
                                                                    <div class="modal-body" > Are you sure? </div>
                                                                    <div class="modal-footer">
                                                                        <a class="btn btn-link bg-red waves-effect" href="<?php echo base_url()?>dashboard/setting/user/delete/<?php echo $user->id  ?>">DELETE</a>
                                                                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CANCEL</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </tr><!-- delete modal -->

                                                    <tr><!-- edit modal -->
                                                        <div class="modal fade" id="levelModal<?php echo $user->id  ?>" tabindex="-1" role="dialog">
                                                            <div class="modal-dialog modal-sm" role="document">
                                                            <?php echo form_open("auth/user_level/".$user->id);?>
                                                                <div class="modal-content modal-col-blue-grey">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="smallModalLabel">EDIT USER LEVEL</h4>
                                                                    </div>
                                                                    <div class="modal-body">

                                                                        <?php if ($this->ion_auth->is_admin()): ?>
                                                                        <?php foreach ($groups as $group):?>

                                                                            <div class="form-group" >
                                                                                <?php
                                                                                    $gID=$group['id'];
                                                                                    $checked = null;
                                                                                    $item = null;
                                                                                    foreach($user->groups as $grp) {
                                                                                        if ($gID == $grp->id) {
                                                                                            $checked= ' checked="checked"';
                                                                                        break;
                                                                                        }
                                                                                    }
                                                                                ?>
                                                                                <input type="checkbox" name="groups[]" id="terms<?php echo $user->id; ?><?php echo $group['id'];?>" value="<?php echo $group['id'];?>" <?php echo $checked;?> >

                                                                                <label for="terms<?php echo $user->id; ?><?php echo $group['id'];?>"> <?php echo $group['name'];?></label>

                                                                            </div>


                                                                        <?php endforeach?>
                                                                        <?php endif ?>

                                                                            <?php echo form_hidden('id', $user->id);?>
                                                                            <?php echo form_hidden($csrf); ?>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="submit" class="btn btn-link bg-blue waves-effect" >SAVE</button>
                                                                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CANCEL</button>
                                                                    </div>
                                                                </div>
                                                            <?php echo form_close();?>
                                                            </div>
                                                        </div>
                                                    </tr><!-- edit modal -->
                                                <?php endforeach;?>

                                            </tbody>
                                        </table>
                                             <!-- Flash messages -->
                                            <div id="infoMessage"><?php echo $message;?></div>

                                             <?php if($this->session->flashdata('delete_user')): ?>
                                                <?php
                                                    echo '<div class="alert bg-green alert-dismissible" style="margin-top:10px" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
                                                    .$this->session->flashdata('delete_user').'</div>'
                                                ?>
                                            <?php endif; ?>
                                            <!-- Flash messages -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- #END# Exportable Table -->

                </div>
            </section>