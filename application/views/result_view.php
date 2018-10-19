<div class="container">
<?php $score = 0;?>


<?php $array1 = array();?>
<?php $array2 = array();?>
<?php $array3 = array();?>
<?php $array4 = array();?>
<?php $array5 = array();?>
<?php $array6 = array();?>
<?php $array7 = array();?>
<?php $array8 = array();?>
<?php $array9 = array();?>
<?php $array10 = array();?>
<?php $array11 = array();?>
<?php $array12 = array();?>

<?php foreach($check as $checkans):?>
   <?php array_push($array1,$checkans);?> 
<?php endforeach;?>

<?php foreach($results as  $result):?>
   <?php array_push($array2,$result->answer);
         array_push($array3,$result->que_id);
         array_push($array4,$result->question);
         array_push($array5,$result->choice1);
         array_push($array6,$result->choice2);
         array_push($array7,$result->choice3);
         array_push($array8,$result->choice4);
         array_push($array9,$result->choice5);
         array_push($array10,$result->answer);
         array_push($array11,$result->main_course_id);
         array_push($array12,$result->subject_id);
   
   
   ?> 
<?php endforeach;?>

<?php for($x=0; $x<2; $x++){?>



<?php echo form_open('quiz/results')?>





<br>
 <h6><?=$array4[$x];?></h6>

 <?php if($array2[$x] != $array1[$x]) { ?>

    <p><span style =" background-color:#FF9C9E">Your Answer : <?=$array1[$x]?></span></p> 
 <p><span style = "background-color:#ADFFB4"> Correct Answer :<?=$array2[$x]?></span></p> 
 
    <?php } else{?>
    <p style = "background-color:#ADFFB4"> Correct Answer :<?=$array2[$x]?></p> 

    <?php $score = $score + 1;?>
     <?php }?>
<?php }?>
<br>


<h6>your marks</h6>
<h6><?=$score;?>/2</h6>
<?php echo anchor('enroll/course/'.$this->uri->segment(3), 'Back to course', 'class="btn btn-primary "'); ?>

<?php echo form_close();?>
</div>