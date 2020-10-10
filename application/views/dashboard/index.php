<?php $this->load->view('header'); ?>
<body>
<?php $this->load->view('nav'); ?>
<hr>
<div class="container justify-content-center">
<h1><?php echo $title ?></h1>
<div class="row">

<div class="col-md-9">
    <table class="table table-bordered">
        <tr>
            <th><strong>First Name</strong></th>
            <th><?php echo $user->first_name ?></th>
        </tr>
        <tr>
            <th><strong>Last Name</strong></th>
            <th><?php echo $user->last_name ?></th>
        </tr>
        <tr>
            <th><strong>Email</strong></th>
            <th><?php echo $user->email ?></th>
        </tr>
        <tr>
            <th><strong>Created at</strong></th>
            <th><?php echo $user->created_at ?></th>
        </tr>
       
    </table>

</div>
<div class="col-md-3">
    <div class="user-pic">

    <?php if(isset($user->profile_photo)){?>
        <img src="<?php echo base_url('uploads/'.$user->profile_photo) ?>" class="img-thumbnail" alt="User image">
    <?php

    }else{?>
        
    <img src="<?php echo base_url('image/unnamed.png') ?>" class="img-thumbnail" alt="User image">
    <?php
    }
    ?>
    </div>
    <a href="<?php  echo site_url('users/upload'); ?>" class="btn btn-success btn-block">Upload Image</a>
</div>
</div>
</div>
    </body>
</html>
<?php $this->load->view('footer') ?>