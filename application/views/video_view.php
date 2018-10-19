<?php foreach($video as $ob):?>
    
<br><br>
<div class="container">
<div class="row">
    <div class="col-md-5">
    <video width="320" height="240" controls>
  <source src="movie.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">
  Your browser does not support the video tag.
</video>
    </div>
<div class="col-md-7">
<h3>Objectives</h3>
<?php $str =  $ob->objectives;
echo wordwrap($str,80,"<br>\n");?>
<br><br><br><br><br><br><br><br><br>
<td><?php echo anchor('quiz/quizDisplay/'.$ob->subject_id.'/'.$this->uri->segment(3), 'Lesson Quiz', 'class="btn btn-primary btn-block"'); ?></td>
</div>
</div>




</div>
<?php endforeach;?>