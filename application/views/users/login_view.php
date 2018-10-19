<style type="text/css">
	.container{
		width: 500px;
		padding-top: 15px;
		border: 1px solid;
		border-radius: 20px;
	}

   

</style>

<br><br>

<div class="container"><br>
<?php echo form_open('users/login'); ?><!--form open-->

<h1 align="center">Login Here!</h1><br>

<p class="bg-danger text-white"><?php echo $this->session->flashdata('login_failed'); ?></p>
<p class="bg-success text-white"><?php echo $this->session->flashdata('user_registered'); ?></p>
<p class="bg-warning text-dark"><?php echo $this->session->flashdata('no_access'); ?></p>
		

  
		  

  

<div class="form-group">
	<input type="text" name="email" class="form-control" placeholder="Email">	
	<span class="text-danger"><?php echo form_error('email'); ?></span>
</div>

<div class="form-group">
	<input type="password" name="password" class="form-control" placeholder="Password">	
	<span class="text-danger"><?php echo form_error('password'); ?></span>
</div>

<div class="form-group">
	<input type="submit" name="login" class="btn btn-success btn-block" value="Login"><br>
	<a href="<?php echo base_url();?>users/register" class="btn btn-primary btn-block">Not a Member?</a>
</div>

<?php echo form_close(); ?><!--form close-->

</div>