<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="<?Php echo base_url()?>assets/lightbox2-master/dist/css/lightbox.min.css">
  <link rel="stylesheet" href="<?Php echo base_url()?>assets/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="<?Php echo base_url()?>assets/fontawesome/css/fontawesome.min.css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/fontawesome.min.css"> -->
    <link rel="stylesheet" href="<?Php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="<?Php echo base_url()?>assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?Php echo base_url()?>assets/libs/css/style.css">
    <!-- <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css"> -->
    <link rel="stylesheet" href="<?Php echo base_url()?>assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="<?Php echo base_url()?>assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="<?Php echo base_url()?>assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?Php echo base_url()?>assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="<?Php echo base_url()?>assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
	<title>Welcome to Jewellery</title>
	<style type="text/css">
	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }
	body {
		background-color: #fff;
		margin-left: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	/* a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	} */

	/* h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	} */

	/* code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	} */

	/* #body {
		margin: 0 15px 0 15px;
	} */

	/* p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	} */
	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	} 
.mybutton{
    padding: 5px;
    border:2px solid gray;
    border-radius: 10% 
}
.green{
    background-color:cornflowerblue;
    color:green !important;
    font-size: 150%;
      padding: 10px;
}
	</style>
</head>