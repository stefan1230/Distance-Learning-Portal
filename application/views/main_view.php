<!DOCTYPE html>
<html>
<head>
  <title>Matrix IIT - Distance Learning Portal.</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">  
  <link href="<?php echo base_url();?>assets/css-custom/style.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="https://www.w3schools.com/w3css/4/w3.css" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
 
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

    
<div id="navbar">
  <a href="<?php echo base_url(); ?>home/index" id="logo">Matrix</a>
  <div id="navbar-right">
  <?php if(!$this->session->userdata('logged_in')): ?> 
    <a class="nav-link" href="<?php echo base_url(); ?>home/index">Home</a>
    <a href="#section1">About Us</a>
    <a href="#contact">Contact</a>
    <a class="nav-link" href="<?php echo base_url(); ?>courses/index">Courses</a>
    <a class="nav-link" href="<?php echo base_url(); ?>users/login">Login</a>
    <?php else: ?>
    
     <a class="nav-link" href="<?php echo base_url(); ?>courses/index">Courses</a>
     <a class="nav-link" href="<?php echo base_url(); ?>users/logout">Logout</a>
     <?php endif; ?>
  </div>
</div>
<br><br><br>


 

    
     
        <?php $this->load->view($main); ?>
      
		
  

<script src="<?php echo base_url()?>assets/js-custom/script.js"></script>
</body>

</html>