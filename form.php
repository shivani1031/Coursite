<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
 
    <title>ENQUIRY form</title>
    <link rel="icon" href="logo.png" type="image/png">


    <style>
      .blue{
background-color: #0b557e;
}
    </style>
  </head>
  <body>
   

      
<?php


  if(isset($_POST['insert']))
  {
$firstname = $_POST['firstname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];
$program = $_POST['program'];
$stats = $_POST['stats'];
$grade = $_POST['grade'];
$days = $_POST['days'];

// $servername = "ftp.ihaconsulting.in";
// $username = "ihacourse@ihaconsulting.in";
// $password = "&L{MfUU_*bv5";

$servername = "localhost";
$username = "root";
$password = "";
$database = "contact";

$conn = mysqli_connect($servername,$username,$password,$database);
/* if(!$conn)
{
die("sorry we fail". mysqli_connect_error());
}
else
{
    echo "connection was successful <br>";
}*/
//SUBMIT TO THE DATABSE
// $sql = "INSERT INTO `register` (`name`, `email`, `phone`, `program`, `stats`, `desc`, `grade`, `dt`)
// VALUES ('$firstname', '$email', '$phone', '$program', '$stats', '$desc', '$grade', current_timestamp())";

$sql = "INSERT INTO `register` ( `name`, `email`, `phone`, `program`, `stats`, `desc`, `grade`, `dt`, `days`) 
VALUES ('$firstname', '$email', '$phone', '$program', '$stats', '$desc', '$grade', current_timestamp(), '$days')";

// INSERT INTO `register` (`Sno`, `name`, `email`, `phone`, `program`, `stats`, `desc`, `grade`, `dt`)
//  VALUES ( 'ewqe', 'samss@gmail.com', '9876543210', 'yes', 'yes', 'xqwe', 'ug', current_timestamp());

$result = mysqli_query($conn,$sql);

if($result)
{
    echo'<div class="alert alert-success" role="alert">
    Entry has been submitted!!
    <br>
    // Please proceed to the payment 
  // <button type="submit" class="btn btnn btn-primary">
  // <a href = "https://ihatrainings.stores.instamojo.com/product/448853/data-science-architect-course/">PAYMENT</a>
  // </button>
    </div>';
}
else{
    echo "the table was not created ". 
    mysqli_error($conn);
}
}

?>
  


<!--top bar starts-->
<div class="container margin-topp ">
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-4 ">
   
      <div class="item-container d-flex align-items-center justify-content-center">
      <img src="fullogo.png" alt=" ">
    </div>
    </div>
    <!-- <div class="col-sm-12 col-md-6 col-lg-4 ">
      <div class="item-container d-flex align-items-center justify-content-center ">
        
        <div class="image-container ">
            <div class="lazy-load" data-src = "/uploads/data-science/signup_page_media/training_highlight_icons/learn_from_home.png"><i class="fa fa-mobile fa-3x" aria-hidden="true"></i></div>
        </div>
        <div class="content-container ">
            <h6 class="title">Call us </h6>
            <p class="description">Stay safe indoors</p>
        </div>
    </div>
    </div> -->
    <div class="col-sm-12 col-md-6 col-lg-4 ">
      <div class="item-container d-flex align-items-center justify-content-center">
        <div class="image-container">
            <div class="lazy-load" data-src = "/uploads/data-science/signup_page_media/training_highlight_icons/learn_from_home.png"><i class="fa fa-mobile fa-3x" style="color:#0b557e" aria-hidden="true"></i></div>
        </div>
        <div class="content-container">
          <br>
            <h6 class="title"><b>&nbsp&nbspCall Us</b></h6>
            <p class="description">&nbsp&nbsp+91-40-48538611</p>
        </div>
    </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4 ">
      <div class="item-container d-flex align-items-center justify-content-center">
        <div class="image-container">
            <div class="lazy-load" data-src = "/uploads/data-science/signup_page_media/training_highlight_icons/learn_from_home.png">
              <i class="fa fa-envelope-o fa-2x" style ="color:#0b557e" aria-hidden="true"></i></div>
        </div>
        <div class="content-container">
          <br>
            <h6 class="title"><strong>&nbsp&nbspEmail</strong></h6>
            <p class="description">&nbsp&nbspinfo@ihaconsulting.in</p>
        </div>
    </div>
    </div>
  </div>
</div>



<!--top bar ends-->

    <!--navbar starts-->
    <nav class="navbar navbar-expand-lg navbar-dark blue">
        <div class="container-fluid ">
         <!-- <a class="navbar-brand" href="https://www.ihaconsulting.in/index.php">
            <img src="footer.png" alt="" width="auto" height="auto">
          </a> -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link" href="https://www.ihaconsulting.in/index.php"><span style ="color:white"><i class="fa fa-home fa-2x " aria-hidden="true"></i></span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.ihaconsulting.in/who-we-are.php">  <strong><span style ="color:white">ABOUT&nbspUS</span></strong> </a>
              </li>
			  <li class="nav-item">
                <a class="nav-link" href="https://www.ihaconsulting.in/services.php">  <strong><span style ="color:white">SERVICES</span></strong> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page"  href="#"> <strong><span style ="color:white">COURSES</span></strong> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.ihaconsulting.in/internships"><strong><span style ="color:white">INTERNSHIPS</span></strong></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.ihaconsulting.in/ongoing.php"><strong><span style ="color:white">ONGOING</span></strong></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.ihaconsulting.in/our-associates.php"><strong><span style ="color:white">ASSOCIATES</span></strong></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.ihaconsulting.in/who-can-partner.php"><strong><span style ="color:white">WHO&nbspCAN&nbspPARTNER</span></strong></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.ihaconsulting.in/photo-gallery.php"><strong><span style ="color:white">GALLERY</span></strong></a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="https://www.ihaconsulting.in/contact.php"><strong><span style ="color:white">CONTACT</span></strong></a>
              </li> -->
              <button type="button" class="btn btn-info "><a class="nav-link" href="https://forms.gle/SMrGQmHF59GW4A9X8"><strong><span style="color:white">ENQUIRY</span></strong></a></button>
        
              <!--<button type="button" class="btn btn-primary m-1">Register</button>-->
              <!-- <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li> -->
            </ul>
          </div>
        </div>
        </nav>
        
    <!--navbar ends-->

    <h1><center>DATA SCIENCE ARCHITECT COURSE</center></h1>
<br>

  <form action="form.php" method="post">
<div class="container">
<div class="form-group row">
  <label for="firstname" class="form-label col-sm-2 ">Name</label>
  <div class="col-sm-10">
    <input type="name" class="form-control" id="fisrtname" name="firstname" placeholder="Ex: John" required>
    </div>
   </div>

   <br>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" name="email" required>
    </div>
  </div>
<br>
  <div class="row">
  <div class="col-6 col-lg-6 col-md-6 col-sm-12">
    <label for="phone" class="form-label">Phone Number</label>
    <input type="number" class="form-control" id="phone" name="phone"  Required>
    </div>

<div class="col-6 col-lg-6 col-md-6 col-sm-12">
    <label for="grade" class="form-label">Academic Qualification </label>
    <input type="text" class="form-control" id="grade" name="grade"  placeholder="UG/PG" required>
    </div>
    </div>
  <!-- <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">stats</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="stats" id="gridRadios1" value="yes" required >
          <label class="form-check-label" for="gridRadios1">
            First radio
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="stats" id="gridRadios2" value="no" required>
          <label class="form-check-label" for="gridRadios2">
            Second radio
          </label>
        </div>
       
      </div>
    </div>
  </fieldset> -->

    <br>
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-12 pt-0" >Whether You have studied Any programming Language like C, C++, R, Java before?
      </legend>
      <!-- <div class="col-sm-"> -->
        <div class="form-check">
          <input class="form-check-input" type="radio" name="program" value="yes" Required>
          
            Yes
         
        </div> 
        <div class="form-check">
          <input class="form-check-input" type="radio" name="program" value="no" Required>
      
            No
         
        </div>
       
      </div>
    
  </fieldset>



  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-12 pt-0" >Have you studied statistics subject during any stage of your educational learning?
      </legend>
      <!-- <div class="col-sm-10"> -->
        <div class="form-check">
          <input class="form-check-input" type="radio" name="stats"  value="yes" Required >
        
          Yes
         
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="stats"  value="no" Required>
  
            No
       
        </div>
       
      </div>
    
  </fieldset>

  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-12 pt-0" >Which days are you interested in?
      </legend>
      <!-- <div class="col-sm-10"> -->
        <div class="form-check">
          <input class="form-check-input" type="radio" name="days"  value="Weekdays" Required >
        
          Weekdays ( Mon - Fri )
         
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="days"  value="Weekends" Required>
  
          Weekends ( Sat & Sun)
       
        </div>
       
      </div>
    
  </fieldset>
<br>
 <div class="form-group">
    <label for="exampleFormControlTextarea1" >Submit any of your queries regarding the course</label>
    <textarea class="form-control" name ="desc" id="exampleFormControlTextarea1" rows="3" required></textarea>
  </div>
<br>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" name = "insert" value = "insert data" class="btn btn-primary">SUBMIT</button>
    </div>
    </div>

    </div>
</form>
<br>
  
  
<section style="background-color:#595959">
      <div class="container">
       <div class="row">
         <div class="col-sm">
           <h4 style="color:white">ABOUT</h4>
         <p style="color:#f2f2f2">We strive to deliver a level of service that exceeds the expectations of our customers.</p>
         <p style="color:#e6e6e6">If you have any questions about our products or services, please do not hesitate to contact us. We have friendly, knowledgeable representatives available seven days a week to assist you.</p>
         </div>
         <div class="col-sm">
           <p><a href="#"><img style="margin-top:10px; border: 5px solid black" src="footer.png" class="rounded mx-auto d-block" width="350vh" height="150vh" alt="com.jpg"></a></p>
         <h4 style="color:#e6e6e6">MAILING LIST</h4>
         <p style="color:#f2f2f2">Subscribe to our mailing list for offers, news updates and more!</p>
         Email ID:
     <input type="mail" name="email id"><br>
     <a href="#" class="badge badge-secondary" style="font-size:20px;margin:5px">SUBSCRIBE</a>
         </div>
         <div class="col-sm">
           <h5 style="color:#f2f2f2">CONTACT</h5>
     
     <span style="color:#f2f2f2">
      1-8-450/A9, Ground Floor,<br> Indian Airlines Colony, Patigadda, Begumpet, <br>
       Hyderabad, Telangana 500016 <br><br>
     Phone: +91-40-48538611<br>
     
     Email: courses@ihaconsulting.in<BR><BR>
      <a href="https://www.instagram.com/p/CP3EeZKl8Ev/?utm_medium=copy_link"><i class="fa fa-instagram" style="color:#f2f2f2;" aria-hidden="true"></i></a>
      <a href="https://api.whatsapp.com/send?phone=919329795187text=welcome%20 "><i class="fa fa-whatsapp" style="color:#f2f2f2;" aria-hidden="true"></i></a>
 
      <a href="https://www.quora.com/profile/IHA-CONSULTING-GROUP "><i class="fa fa-quora" style="color:#f2f2f2;" aria-hidden="true"></i></a>
      <a href=" https://www.linkedin.com/feed/update/urn:li:activity:6807568088318447616 "><i class="fa fa-linkedin" style="color:#f2f2f2;" aria-hidden="true"></i></a>
      <!-- <a href=" "><i class="fa fa-facebook" style="color:#f2f2f2;" aria-hidden="true"></i></a> -->
    </span> 
     <!--<i class="fa-3x fa fa-desktop" aria-hidden="true"></i>-->
     
         </div>
       </div>
     </div>
     <hr width="100%"></hr>
     <p style="color:#f2f2f2;text-align:center">Copyright &copy; 2021 ihaconsulting.in - All rights reserved</p>
     </section>
     
    
    <!--footer ends-->

  
  <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>