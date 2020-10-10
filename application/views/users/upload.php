<?php $this->load->view('header'); ?>
<body>
<?php $this->load->view('nav'); ?>
<hr>

<div class="row justify-content-center">
    <div class="col-6">
        <h1><?php echo $title ?></h1>
        <?php if($this->session->flashdata('message')) { ?>
            <div class="alert alert-danger">
                <?php echo $this->session->flashdata('message')?>
            </div>
        <?php } ?>
        <?php echo form_open_multipart('users/upload') ?>
            <div class="form-group">
                <input type="file" name="userfile"/>
                <?php echo $error??'' ?>
            </div>
         
            <div class="form-group">
                <input type="submit" name="submit" value="Upload" class="btn btn-primary"/>
            </div>
        <?php echo form_close(); ?>
    </div>
</div>
</body>
</html>
<?php $this->load->view('footer') ?>