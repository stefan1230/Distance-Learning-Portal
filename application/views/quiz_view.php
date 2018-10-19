<div class="container">
<?php echo form_open('quiz/results/'.$this->uri->segment(3).'/'.$this->uri->segment(4))?>


<?php foreach($questions as $row):?>
 <?php $ans_arr = array($row->choice1, 
                        $row->choice2,
                        $row->choice3,
                        $row->choice4,
                        $row->choice5,
                        $row->answer);?>
 <?php shuffle($ans_arr);?>
<br>
 <h6><?=$row->question;?></h6>
 <input type='radio' name="que_id<?=$row->que_id?>" value="<?=$ans_arr[0]?>"><?=$ans_arr[0]?><br>
 <input type='radio' name="que_id<?=$row->que_id?>" value="<?=$ans_arr[1]?>"><?=$ans_arr[1]?><br>
 <input type='radio' name="que_id<?=$row->que_id?>" value="<?=$ans_arr[2]?>"><?=$ans_arr[2]?><br>
 <input type='radio' name="que_id<?=$row->que_id?>" value="<?=$ans_arr[3]?>"><?=$ans_arr[3]?><br>
 <input type='radio' name="que_id<?=$row->que_id?>" value="<?=$ans_arr[4]?>"><?=$ans_arr[4]?><br>
 

<?php endforeach;?>
<br>

<input type="submit" name="submit" value="submit" class="btn btn-success">

<?php echo form_close();?>
</div>