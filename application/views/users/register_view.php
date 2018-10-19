<style type="text/css">
	.container{
		width: 800px;
		padding-top: 15px;
		border: 1px solid;
		border-radius: 20px;
	}

</style>

<br><br>
<div class="container"><br>
<?php echo form_open_multipart('users/register'); ?><!--form open-->

<h1 align="center">Register Here!</h1><br>

<label for="">Title</label>
<select name="title" id="title" class="form-control">
   <option value="mr">Mr.</option>
   <option value="mrs">Mrs.</option>
   <option value="ms">Ms.</option>
   <option value="miss">Miss.</option>
</select>

<br>


<div class="form-group">
<label for="">First Name</label>
	<input type="text" name="f_name" class="form-control" placeholder="First Name">	
	<span class="text-danger"><?php echo form_error('f_name'); ?></span>
</div>

<div class="form-group">
	<label for="">Surname</label>
	<input type="text" name="l_name" class="form-control" placeholder="Surname">	
	<span class="text-danger"><?php echo form_error('l_name'); ?></span>
</div>

<div class="form-group">
<label for="">Address</label>
<textarea class="form-control" rows="2" id="address" name="address"></textarea>
	<span class="text-danger"><?php echo form_error('date'); ?></span>
</div>

<div class="form-group">
<label for="">Country</label>
	<input type="text" name="country" class="form-control" placeholder="Country">	
	<span class="text-danger"><?php echo form_error('country'); ?></span>
</div>

<div class="form-group">
<label for="">Email</label>
	<input type="email" name="email" class="form-control" placeholder="Email">	
	<span class="text-danger"><?php echo form_error('email'); ?></span>
</div>

<div class="form-group">
<label for="">Date Of Birth</label>
	<input type="date" name="date" class="form-control">	
	<span class="text-danger"><?php echo form_error('date'); ?></span>
</div>

<div class="form-group">
<label for="">Gender</label>
<select name="gender" id="gender" class="form-control">
   <option value="male">Male</option>
   <option value="female">Femal</option>
</select>
</div>





<!-- <div class="form-group">
	<input type="text" name="username" class="form-control" placeholder="Username">	
	<span class="text-danger"><?php echo form_error('username'); ?></span>
</div>

<div class="form-group">
	<input type="password" name="password" class="form-control" placeholder="Password">	
	<span class="text-danger"><?php echo form_error('password'); ?></span>
</div>

<div class="form-group">
	<input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password">	
	<span class="text-danger"><?php echo form_error('confirm_password'); ?></span>
</div> -->

<div class="form-group">
	<input type="submit" name="Register" class="btn btn-success btn-block" value="Register">	
</div>

<?php echo form_close(); ?><!--form close-->

</div>

<br><br>