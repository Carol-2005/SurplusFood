<?php
include 'connection.php';
// $connection=mysqli_connect("localhost:3307","root","");
// $db=mysqli_select_db($connection,'demo');
if(isset($_POST['sign']))
{

    $username=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $address=$_POST['address'];
    $phoneno=$_POST['phoneno'];    
    $img=$_POST['img'];

    $pass=password_hash($password,PASSWORD_DEFAULT);
    $sql="select * from login where email='$email'" ;
    $result= mysqli_query($connection, $sql);
    $num=mysqli_num_rows($result);
    if($num==1){

        echo "<h1><center>Account already exists</center></h1>";
    }
    else{
    
    $query="insert into login(name,address,email,phoneno,password,fssai) values('$username','$address','$email','$phoneno','$pass','$img')";
    $query_run= mysqli_query($connection, $query);
    if($query_run)
    {
      
       
        header("location:signin.php");
       
    }
    else{
        echo '<script type="text/javascript">alert("data not saved")</script>';
        
    }
}


   
}
?>




<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add restaurant</title>
    <link rel="stylesheet" href="loginstyle.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    
</head>
<body>

    <div class="container">
    <div class="regform">
       
        <form action=" " method="post">
            <p class="logo">Feed for <b style="color: #06C167;">Good</b></p>
            
            <p id="heading">Add Restaurant</p>
            
            <div class="input">
                <label class="textlabel" for="name">Restaurant name</label><br>
                <input type="text" id="name" name="name" required/>
             </div>
             <div class="input">
                <label class="textlabel" for="address">Restaurant Complete Address</label><br>
                <input type="text" id="address" name="address" required/>
             </div>
             <div class="input">
                <label class="textlabel" for="email">Email</label>
                <input type="email" id="email" name="email" required/>
            </div>
             <div class="input">
            <label class="textlabel" for="phoneno">Mobile Number</label>
            <input type="text" id="phoneno" name="phoneno">
         
                <!-- <label class="textlabel" for="password">Password</label>
                <input type="password" id="password" name="password" > -->
            
        
              

             </div>
             <label class="textlabel" for="password">Password</label>
             <div class="password">
              
                <input type="password" name="password" id="password" required/>
                <!-- <i class="fa fa-eye-slash" aria-hidden="true" id="showpassword"></i> -->
                <!-- <i class="bi bi-eye-slash" id="showpassword"></i>  -->
                <!-- <i class="uil uil-lock icon"></i> -->
                <i class="uil uil-eye-slash showHidePw" id="showpassword"></i>                
			
             </div>
             <div class="input">
             <label for="img">FSSAI License Copy:</label>
             <input type="file" id="img" name="img" accept="image/*" required>
             </div>
             <div class="btn">
             <button type="submit" name="sign">Continue</button>
             </div>
            
           <!-- <button type="submit" style="background-color:white ;color: #000; margin-top:5px;  padding: 10px 25px;">
                 <img src="google.svg" style="width:22px" >
                 Continue With  Google </button>  -->
                
            <div class="signin-up">
                 <p style="font-size: 20px; text-align: center;">Already added? <a href="signin.php"> Sign in</a></p>
             </div>
         

        </form>
        </div>
        <!-- <div class="right">
            <img src="cover.jpg" alt="" width="800" height="700">
        </div> -->
       
    </div>
  

    <!-- <script src="login.js"></script> -->
    <script src="admin/login.js"></script>
       
</body>
</html>