<br><br>
<div class="container">
<h4>Modules</h4>

<div class="row">

   <div class="col-md-8">
   <p class="text-light bg-dark"><?php echo $this->session->flashdata('enroll'); ?></p> 
  
   <?php echo "<p class='bg-success text-white'>".$this->session->flashdata('enrolled')."</p>"."<br>"; ?>

    
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Subjects Name</th>
      
    </tr>
  </thead>
  <tbody>
  <?php foreach ($subjects as $ob):?>
    <tr>
    <?php echo "<td>".$ob->subject_name."</td>"?>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>
      

    
   </div>
   

  <div class="col-md-4">
    <br><br><br>
    <?php if($this->course_model->get_data()){
             echo anchor('enroll/course/'.$this->uri->segment(3), 'GO TO COURSE', 'class="btn btn-primary btn-block"');
    }else{
      echo anchor('enroll/index/'.$this->uri->segment(3), 'Enroll', 'class="btn btn-primary btn-block"');
    }
    ?>
  </div>

  
   
</div>
</div>




