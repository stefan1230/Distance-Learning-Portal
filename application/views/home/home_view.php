<style>
    .test{
    height:95vh;
    background-size: cover;
    background-position: top;
    
}
.container-fluid{
    height:65vh;
    background-size: cover;
    background-position: top;
    padding-top:30px;
    background-color: #00BCD4; /* Green */
    color:white;
}

.container-fluid-one{
    height:65vh;
    background-size: cover;
    background-position: top;
    padding-top:30px;
    background-color: white; /* Green */
    color:black;
}
.text-block {
    position: absolute;
    bottom: 20px;
    right: 20px;
    background-color: black;
    color: white;
    padding-left: 20px;
    padding-right: 20px;
}

.centered {
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size:60px;
    color : #ffffff;
    letter-spacing: 10px;
}
.centered-one {
    position: absolute;
    top: 50%;
    left: 50%;
    
    transform: translate(-50%, -50%);
    font-size:60px;
    color : #ffffff;
    letter-spacing: 6px;
}
.centered-two {
    text-align:center;
    position: absolute;
    top: 70%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size:30px;
    color : #ffffff;
}


.button {
    background-color: #4CAF50; /* Green */
    border-radius: 12px;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
.button1 {
    background-color: white;
    color: black;
    /* border: 2px solid #fff; Green */
}
.button1:hover {
    background-color: #FDD835;
    color: white;
    text-decoration: none;
    box-shadow: 0 8px 16px 0 rgba(255,255,250,0.5), 0 6px 20px 0 rgba(0,0,0,1);
}

.button2 {
    background-color: white;
    color: black;
    /* border: 2px solid #fff; Green */
}
.button2:hover {
    background-color:	#32CD32;
    color: white;
    text-decoration: none;
    box-shadow: 0 8px 16px 0 rgba(255,255,250,0.5), 0 6px 20px 0 rgba(0,0,0,1);
}


</style>



<section >
<div class="test">
<img src="<?php echo base_url();?>assets/img/1.jpg" style = "width:100%; height:100%;"    alt="">
  <div class="centered">Distance Learning</div>
  <div class="centered-one">Portal of Matrix IIT</div>
  <?php if(!$this->session->userdata('logged_in')): ?> 
  <div class="centered-two">

      <a href="<?php echo base_url(); ?>users/login"  style="height:55px;width:120px" class="button button1"><b>Login </b></a>
      &nbsp  
      <a href="<?php echo base_url(); ?>users/register" style="height:55px;width:120px"  class="button button2"><b>Register</b></a>
  </div>
<?php endif;?>
</div>
</section>


<div id="section1" class="container-fluid">
    <br><br>
  <h1 align="center">About Us</h1><br>
  <hr class="my-4">
  <h5 align="center">MATRIX INSTITUTE OF INFORMATION TECHNOLOGY (PVT) LTD, 
  located in the heart of Colombo, No.04, Bambalapitiya Drive, 
  Galle Road, Colombo-04 offers the BCS - UK, Higher Education 
  Qualification and is one of the leading institutes in Sri Lanka 
  to conduct BCS and is an Approved Course Provider. BCS, Higher Education
   Qualifications (HEQ), leads to become a Chartered member of the society and
    further BCS is the only Chartered Body for IT in the world. BCS HEQ is equivalent 
    to Bachelor’s Degree in Computing.</h5> 
</div>


  <section id="contact" class="container-fluid-one">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <br><br><br>
            <h2 class="section-heading">Let's Get In Touch!</h2>
            <hr class="my-4">
           
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
          <img src="<?php echo base_url();?>assets/img/phone.svg" alt="">
            <p>123-456-6789</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
          <img src="<?php echo base_url();?>assets/img/email.svg" alt="">
            <p>
              <a href="mailto:your-email@your-domain.com">example@example.com</a>
            </p>
          </div>
        </div>
      </div>
    </section>