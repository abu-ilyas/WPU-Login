<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-7">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900">Change your password for</h1>
                                    <h5 class="mb-4"><?php echo $this->session->userdata('reset_email') ?></h5>
                                </div>

                                <?php echo $this->session->flashdata('message'); ?>

                                <form class="user" method="POST" action="<?php echo base_url('auth/changepassword'); ?>">
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password1" placeholder="Enter New Password..." name="password1">
                                        <?php echo form_error('password1', '<small class="text-danger pl-3">', '</small>') ?></small>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password2" placeholder="Repeat Password..." name="password2">
                                        <?php echo form_error('password2', '<small class="text-danger pl-3">', '</small>') ?></small>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Change Password
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>