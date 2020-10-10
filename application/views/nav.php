<nav class="navbar navbar-expand-lg navbar-light bg-light green" >

 <!-- <display-3>Jewellary</display-3> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse green" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ">
      <li class="nav-item active">
        <a class="nav-link" href="#"><?php  echo anchor('jewellery/index','Home',array('class'=>'text-white')) ?>&nbsp;&nbsp;&nbsp;<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><?php  echo anchor('jewellery/diamond','Diamond',array('class'=>'text-white')) ?>&nbsp;&nbsp;&nbsp;</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#"><?php  echo anchor('jewellery/gold','Gold',array('class'=>'text-white')) ?>&nbsp;&nbsp;&nbsp;</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#"><?php  echo anchor('jewellery/silver','Silver',array('class'=>'text-white')) ?>&nbsp;&nbsp;&nbsp;</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#"><?php  echo anchor('jewellery/address','Address',array('class'=>'text-white')) ?>&nbsp;&nbsp;&nbsp;</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
      <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><?php echo anchor('users/login','Log in')  ?></button> -->
   <ul class="navbar-nav right">
   <?php if($this->session->userdata('authenticated')){
     ?>
     <li class="nav-item">
     <?php echo anchor('dashboard','My Account',array('class'=>'text-white nav-link'))?>
     </li>
     <li class="nav-item">
     <?php echo anchor('users/logout','Log Out',array('class'=>'text-white nav-link'))?>
     </li>
     <?php
   }else{
?>
     <li class="nav-item">
     <?php echo anchor('users/signup','Sing Up',array('class'=>'text-white nav-link'))?>
     </li>
     <li class="nav-item">
     <?php echo anchor('users/login','Log in',array('class'=>'text-white nav-link'))?>
     </li>
     <?php


   }
   ?>
   </ul>
   
    </form>
  </div>
</nav>