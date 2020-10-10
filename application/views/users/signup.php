<?php $this->load->view('header'); ?>
<body>
<?php $this->load->view('nav'); ?>
<hr>

<div class="row justify-content-center">
    <div class="col-6">
        <h1><?php echo $title ?></h1>
        <?php /* ?>
        <?php if($this->session->flashdata('message')) { ?>
            <div class="alert alert-danger">
                <?php echo $this->session->flashdata('message')?>
            </div>
        <?php } ?>
        <?php */ ?>

        <?php echo form_open_multipart('users/signup', array('id' => 'signForm','class'=>'sing-form')) ?>
            <div class="form-group">
                <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name" value="<?php echo set_value('first_name'); ?>" />
                <?php echo form_error('first_name', '<div class="error">', '</div>') ?>
            </div><br>
            <div class="form-group">
                <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name"  value="<?php echo set_value('last_name'); ?>" />
                <?php echo form_error('last_name', '<div class="error">', '</div>') ?>
            </div><br>
            <div class="form-group">
                <input type="email" name="email" id="email" class="form-control" placeholder="Email"  value="<?php echo set_value('email'); ?>" />
                <?php echo form_error('email', '<div class="error">', '</div>') ?>
            </div><br>
            <div class="form-group">
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" />
                <?php echo form_error('password', '<div class="error">', '</div>') ?>
            </div><br>
            <div class="form-group">
                <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm Password" />
                <?php echo form_error('confirm_password', '<div class="error">', '</div>') ?>
            </div><br>
            <div class="form-group">
                <input type="submit" name="submit" value="Sing Up" />
            </div>
            <?php /* ?>
            <div class="form-group">
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" />
                <?php echo form_error('password', '<div class="error">', '</div>') ?>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Login" class="btn btn-primary"/>
            </div>

            <?php */ ?>


        <?php echo form_close(); ?>
    </div>
</div>
</body>
</html>
<?php $this->load->view('footer') ?>