<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style>
.new-section{
	margin:20px;
}
</style>

<!-- Tabs -->
<br>
<section id="tabs" class="new-section">
	<div class="container">
    
		<h6 class="section-title h1"><?php echo $view1->name;?></h6>
		<br>
		<div class="row">
			<div class="col-lg-12 ">
				<nav>
					<div class="nav nav-tabs nav-justified" role="tablist">
						<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Overview</a>
						<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Modules</a>
						<!-- <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Quizes</a>
						<a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">About</a> -->
					</div>
				</nav>
				<div class="tab-content" id="nav-tabContent">
					<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
						<br>
						<h6><?php echo $view1->description?></h6>
					</div>
					<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <table class="table table-striped">
                      <thead>
                     </thead>
                       <tbody>
					   <br>
                         <?php foreach($view as $ob):?>
                        <tr>
						<?php echo "<th>".$ob->subject_name."</td>"?>

						<td><?php echo anchor('courses/video/'.$ob->subject_id.'/'.$this->uri->segment(3), 'View Lesson', 'class="btn btn-primary btn-block"'); ?></td>
						  
						
                        </tr>
					   <?php endforeach;?>
					   
                    </tbody>
					</table>    
					                     
					</div>
					
					<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
					
					</div>
					<div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
						
					</div>
				</div>
			
			</div>
		</div>
	</div>



</section>
<!-- ./Tabs -->


