<?php
session_start();
   include "db_conn.php";
   if (isset($_SESSION['id'])) {
   ?>

<!doctype html>
<html lang="en">
  <head>
    <!--  meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- for date -->
<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

    <title>Hello, world!</title>

    <style>
        .bg{
            background-color: rgb(216, 215, 213);
        }
    </style>



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


<!-- Including jQuery for alert dismiss -->
<script src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js">
	</script>

	<!-- Including Bootstrap JS -->
	<script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js">
	</script>
<!-- script for automatic dismiss alert -->
<script type="text/javascript">
                      setTimeout(function () {
                  
                        // Closing the alert
                        $('#ale').alert('close');
                      }, 1000);
                    </script>




  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="row">
            <div class="col">
            <a class="navbar-brand" href="application_form.php">Home</a>
            </div>
            <div class="col">

            </div>
            <div class="col">
            <a class="navbar-brand" href="logout.php">Logout</a>
            </div>
        </div>
        

      
       
      
     
      </nav>


      <!-- php -->
<?php
      if($_SERVER['REQUEST_METHOD']=='POST'){
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$address=$_POST['address'];
$phone=$_POST['phone'];

$dob=$_POST['dob'];
$state=$_POST['state'];
// $deg_name=$_POST['deg_name'];
$work_exp=$_POST['work_exp'];
$company=$_POST['company'];
$research_topic=$_POST['research_topic'];
$salary=$_POST['salary'];
// $negotiable=$_POST['negotiable'];
$pp=$_POST['pp'];
$sp=$_POST['sp'];
$deg_file=$_POST['deg_file'];
$research_file=$_POST['research_file'];


$sql=" INSERT INTO `information` (`sno`, `fname`, `mname`, `lname`, `email`, `address`, `phone`,  `dob`, `state`,`pp`,`sp`,`deg_file`, `work_exp`, `company`, `research_topic`,`research_file`, `salary`, `timestamp`) VALUES ( NULL,'$lname', '$mname', '$lname', '$email', '$address', '$phone', '$dob', '$state','$pp','$sp', '$deg_file', '$work_exp', '$company', '$research_topic','$research_file' ,'$salary', current_timestamp())";

$result=$conn->query($sql);
if($result===TRUE){
echo '<div id="ale" class="alert bg-success alert-dismissible fade show" style="width:100%;" role="alert">
<strong>Successfully Added!</strong>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>';
}



}

?>





<?php

if (isset($_POST['submit'])) 
{ 
// echo date('h:i:s') . '<br>'; 
sleep(5);  
 

echo '
<div class="container  border-bottom border-left border-right border-top">
<div class="row"><div class="col"><div><div class="col">
</div>

          <div class="row">
                <div class="col">
                
                </div>
                <div class="col-5">
                <h4 class="text-center font-weight-bold my-3" bg-light>Application Form</h4>
                </div>
                <div class="col">
                <p class="my-3"><button class=" bg-info"  onclick="window.print()">Print</button></p>
                </div>
              </div>


<div class="container">
    <div class="row my-4 border-top">
        <div class="col my-5 ">
        <div class="row border-bottom border-left border-right border-top">
        <div class="col">
        <p class="font-weight-bold bg-light ">First Name   :</p>
        </div>
        <div class="col">
        '.$_POST['fname'].'
        </div>
        </div>
        <div class="row border-bottom border-left border-right border-top">
        <div class="col">
        <p class="font-weight-bold bg-light ">Middle Name   :</p>
        </div>
        <div class="col">
        '.$_POST['mname'].'
        </div>
        </div>
        <div class="row border-bottom border-left border-right border-top">
        <div class="col">
        <p class="font-weight-bold bg-light ">Last Name   :</p>
        </div>
        <div class="col">
        '.$_POST['lname'].'
        </div>
        </div>
    
        </div>
        <div class="col">
        <div class="row">
       
            <div class="col">

            </div>
            <div class="col text-center my-3">
            
            <div class="card border-bottom border-left border-right border-top" style="width: 8rem;height:10rem">
            <img class="card-img-top" src="..." alt="'.$_POST['fname'].'">
            <div class="card-body">
             <p class="">PassPort Photo</p>
            </div>
          </div>
            </div>


            <div class="col my-5">
<div class="card my-3 border-bottom border-left border-right border-top" style="width: 8rem;height:3rem">
            <img class="card-img-top" src="..." alt="'.$_POST['fname'].' Signature"> 
            
          </div>
            
            </div>
            </div>
        </div>
        
    </div>

    <div class="row border-bottom border-left border-right border-top">
    <div class="col">
    <p class="font-weight-bold">Email : </p>
    </div>
    <div class="col">
    '.$_POST['email'].'
    </div>
    </div>

    <div class="row border-bottom border-left border-right border-top ">
    <div class="col">
    <p class="font-weight-bold">Address :</p>
    </div>
    <div class="col">
    '.$_POST['address'].'
    </div>
         
    </div>

    <div class="row border-bottom border-left border-right border-top">
       <div class="col">
       <p class="font-weight-bold">Phone Number : </p>
       </div>
       <div class="col">
       '.$_POST['phone'].'
       </div> 
    </div>
    <div class="row border-bottom border-left border-right border-top">
        <div class="col">
        <div class="row">
        <div class="col">
        <p class="font-weight-bold">Date of Birth : </p>
        </div>
        <div class="col">
        '.$_POST['dob'].'
        </div>
        </div>
            
        </div>
        <div class="col">
        <div class="row">
        <div class="col">
        <p class="font-weight-bold">State : </p>
        </div>
        <div class="col">
        '.$_POST['state'].'
        </div>
        </div>
          
        </div>
      
    </div>

    <div class="row border-bottom border-left border-right border-top">
      <div class="col">
      <p class="font-weight-bold">Your Highest Qualification : </p>
      </div>
      <div class="col">
      '.$_POST['deg_name'].'
      </div>
          
        
    </div>
    <div class="row border-bottom border-left border-right border-top">
        <div class="col">
        <div class="row">
        <div class="col">
        <p class="font-weight-bold">Work experience : </p>
        </div>
        <div class="col">
        '.$_POST['work_exp'].'
        </div>
        </div>
        
        </div>
        <div class="col ">
        <div class="row">
        <div class="col">
        <p class="font-weight-bold">Company Name : </p>
        </div>
        <div class="col">
        '.$_POST['company'].'
        </div>
        </div>
           
        </div> 
    </div>

    <div class="row border-bottom border-left border-right border-top">
    <div class="row">
    <div class="col">
    <p class="font-weight-bold">Research Paper Topic : 
    </div>
    <div class="col">
    '.$_POST['research_topic'].'
    </div>
    </div>
      
    </div>
    <div class="row border-bottom border-left border-right border-top">
    <div class="col">
    <p class="font-weight-bold">Expected Salary :</p>
    </div>
        <div class="col">
        '.$_POST['salary'].'
        </div>
    </div>
</div>
</div>



';

 
// echo date('h:i:s'); 
 
}

?>


      <div class="m-4">
    <div class="accordion" id="myAccordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button type="button" class="accordion-button collapsed text-center font-weight-bold" data-bs-toggle="collapse" data-bs-target="#collapseOne">Fill Application Form</button>									
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                <div class="card-body">
                <div class="container my-3">
<?php //$_POST['email'] ; ?>
    <form method="post" action="application_form.php">
        <div class="container border-bottom border-top border-right border-left">
<h5 class="border-bottom text-center bg">Personal Information</h5>
        
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="fname">First Name</label>
                    <input type="fname" class="form-control" id="fname" name="fname" aria-describedby="emailHelp" required>
                </div>
                <div class="col">
                    <label for="mname">Middle Name</label>
                    <input type="mname" class="form-control" id="mname" name="mname" aria-describedby="emailHelp"required >
                </div>
                <div class="col">
                    <label for="lname">Last Name</label>
                    <input type="lname" class="form-control" id="lname" name="lname" aria-describedby="emailHelp" required>
                </div>
                
            </div>
         
      
        </div>

        <div class="form-group">
          <label for="email">Enter your Email</label>
          <input type="email" class="form-control" id="email"  name="email" required>
        </div>
        
        <div class="form-group">
            <label for="address">Enter your Address</label>
            <input type="text" class="form-control" id="address" name="address" required>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="phone">Phone Number</label>
                    <input type="number" class="form-control" id="phone" name="phone" required>
                </div>
              
            </div>
            
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="dob">Date Of Birth</label>
                    <input type="date" class="form-control" id="dob" name="dob" required>
                </div>
                <div class="col">
                    

                    <label for="state">Select Your State</label>

                    <!--- India states --><br/>
<select id="state" name="state" id="state" class="form-control" required>
    <option value="" selected="selected" disabled="disabled">Select a option</option>
    <option value="AN">Andaman and Nicobar Islands</option>
    <option value="AP">Andhra Pradesh</option>
    <option value="AR">Arunachal Pradesh</option>
    <option value="AS">Assam</option>
    <option value="BR">Bihar</option>
    <option value="CH">Chandigarh</option>
    <option value="CT">Chhattisgarh</option>
    <option value="DN">Dadra and Nagar Haveli</option>
    <option value="DD">Daman and Diu</option>
    <option value="DL">Delhi</option>
    <option value="GA">Goa</option>
    <option value="GJ">Gujarat</option>
    <option value="HR">Haryana</option>
    <option value="HP">Himachal Pradesh</option>
    <option value="JK">Jammu and Kashmir</option>
    <option value="JH">Jharkhand</option>
    <option value="KA">Karnataka</option>
    <option value="KL">Kerala</option>
    <option value="LA">Ladakh</option>
    <option value="LD">Lakshadweep</option>
    <option value="MP">Madhya Pradesh</option>
    <option value="MH">Maharashtra</option>
    <option value="MN">Manipur</option>
    <option value="ML">Meghalaya</option>
    <option value="MZ">Mizoram</option>
    <option value="NL">Nagaland</option>
    <option value="OR">Odisha</option>
    <option value="PY">Puducherry</option>
    <option value="PB">Punjab</option>
    <option value="RJ">Rajasthan</option>
    <option value="SK">Sikkim</option>
    <option value="TN">Tamil Nadu</option>
    <option value="TG">Telangana</option>
    <option value="TR">Tripura</option>
    <option value="UP">Uttar Pradesh</option>
    <option value="UT">Uttarakhand</option>
    <option value="WB">West Bengal</option>
</select> 
        
 </div>
 </div>          
</div> 

<div class="row">
    <div class="col">
       <?php //include "image_process.php";
       ?>

    <!-- <form action="application_form.php" method="post" enctype="multipart/form-data"> -->
  Passport Photo:
  <input type="file" name="pp" id="fileToUpload">
  <!-- <input type="submit" value="Upload Image" name="btnSubmit"> -->
<!-- </form> -->



    </div>
    <div class="col">
        <label for="img">Signature :</label>
        <input type="file" id="img" name="sp" accept="image/*">
    </div>
</div>

</div>   

 
<!-- education qualifications -->
<div class="container my-4 border-bottom border-top border-right border-left">
    <h5 class="border-bottom text-center bg">Work Experience & Education Qualification Information</h5>
<label for="state">Your highest Qualification & Upload degree Certificate</label>
<div class=" form-group">
   
        <div class="row">
            <div class="col">
                <select class=" form-control dropdown" id="deg_name" name="deg_name" required>
                    <option value="" selected="selected" disabled="disabled">-- select one --</option>
                 
                    <option value="Secondary education">Secondary education or high school</option>
                    <option value="GED">GED</option>
                    <option value="Vocational qualification">Vocational qualification</option>
                    <option value="Bachelor's degree">Bachelor's degree</option>
                    <option value="Master's degree">Master's degree</option>
                    <option value="Master's degree">Phd</option>
                    <option value="Master's degree">Master's degree</option>
                    <option value="Doctorate or higher">Doctorate or higher</option>
                  </select>
            </div>

            <div class="col">
                <input name="deg_file" id="deg_file" type="file" accept="application/pdf, application/vnd.ms-excel" />
                
            </div>
        </div>
   

    
</div>




<div class=" form-group">
   <div class="row">
    <div class="col">
        <label for="address">work experience</label>
        <input type="number" class="form-control" name="work_exp"id="experience" required>
    </div>
    <div class="col">
        <label for="company">Company Name</label>
        <input type="text" class="form-control"name="company" id="company" required>
    </div>
   </div>
   
    
</div>
<div class="row">
    <div class="col">
        <label for="research_name">Topic Name of your popular research paper</label>
    <input type="text" class="form-control" name="research_topic"id="research_name" required>
    </div>
   <div class="col">
    <label for="research_name">Submit Pdf File</label><br/>
  
        <input name="research_file" type="file" accept="application/pdf, application/vnd.ms-excel" />
   </div>
</div>



<div class="form-group">
    <label for="fee">Expected Fees/Salary</label>
    <input type="number" class="form-control" name="salary"id="fee" required>
</div>





<div class="row">
    <div class="col">

    </div>
    <div class="col">
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        
    </div>
    
</div>


</form>


</div>

            </div>
            </div>
        </div>
        
        
    </div>
</div>

    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>