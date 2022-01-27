    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-5">
                <h2>Register User</h2>

                <?php if(isset($validation)):?>
                <div class="alert alert-warning">
                   <?= $validation->listErrors() ?>
                </div>
                <?php endif; ?>

                <?php echo form_open('users/register'); ?>
                    <div class="form-group mb-3">
                        <input type="text" name="name" placeholder="Name" value="<?= set_value('name') ?>" maxlength="50" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="username" placeholder="Username" value="<?= set_value('username') ?>" maxlength="15" class="form-control" required >
                    </div>

                    <div class="mb-3">
                        <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" class="form-control" required >
                    </div>

                    <div class="mb-3">
                        <input type="password" name="password" placeholder="Password" class="form-control" required >
                    </div>

                    <div class="mb-3">
                        <input type="password" name="confirmpassword" placeholder="Confirm Password" class="form-control" required >
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-dark">Signup</button>
                    </div>
                <?php echo form_close(); ?>
                <p>Already a user? <a href="<?php echo base_url(); ?>/users/register">login now!</a>
            </div>
        </div>
    </div>