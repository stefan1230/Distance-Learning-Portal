<style type="">
	.container{
		padding: 10px;
    width: 900px;
       
	}
</style>
<br>
<div class="container">
  <h3>Courses provided by Matrix...</h3><br>
<div class="card-deck">
<?php foreach($main_course as $ob):?>
  <div class="card border-primary">
  
    <!-- <img class="card-img-top" src="<?php echo base_url()?>/assets/ee.png"  alt="Card image cap"> -->
    <div class="card-body">
      <h5 class="card-title"><?php echo $ob->name?></h5>
      <p class="card-text"><?php echo $ob->description?></p>
      
    </div>
    <div class="card-footer">
    <a href="<?php echo base_url(); ?>courses/get_module/<?php echo $ob->id  ?>" class="btn btn-success btn-block">View Course</a>
    <a href="<?php echo base_url(); ?>enroll/index/<?php echo $ob->id  ?>" class="btn btn-success btn-block">Enroll</a>
    </div>
  </div>
<?php endforeach;?>
</div>

</div>






