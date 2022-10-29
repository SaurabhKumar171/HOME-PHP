<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

       h2,form {
            text-align: center;
        }
        
    </style>
</head>
<body>
    <h2>Registration form</h2>
    <form action="save_data_in_form.php" method="post">
        Name : <input type="text" name="name"><br>

        <br>

        Email ID: <input type="text" name="email"><br>

        <br>
        
        Phone number :<input type="text" name="phone"><br>

        <br>
        
       
        Gender :   <input type="radio" id="male" name="Gender" value="male">
        <label for="male">Male</label>
    
        <input type="radio" id="female" name="Gender" value="female">
        <label for="female">Female</label>
    
        <input type="radio" id="others" name="Gender" value="others">
        <label for="others">Others</label>  <br>

        
        <br>
        
        Password : <input type="password" name="password"><br>

        <br>

        Nationality :
        <select name="Nationality" id="Nationality">
          <option value="india">India</option>
          <option value="america">America</option>
          <option value="austrailia">Austrailia</option>
          <option value="dubai">Dubai</option>
        </select> 
          <br>
       
        <br>
       
          <br>
        
        <button type="submit" value="Submit">Submit</button><br>

        
        <br>
        
    

    </form>
</body>
</html>


<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $gender=$_POST['Gender'];
  $pass=$_POST['password'];
  $natonality=$_POST['Nationality'];

  $servername="localhost";
  $username="root";
  $password="";
  $database="company";

   $cons=mysqli_connect($servername,$username,$password,$database); 


   // $sql="Create database saurabh";
   // mysqli_query($cons,$sql);


     if(!$cons){
      die("OOPS ! can't be connected".mysqli_connect_error());
      }
   else{
      echo "connected<br>";
        
      $sql="INSERT INTO `empolyee` (`Name`, `Email ID`, `Phone no.`, `Gender`, `Password`, `Nationality`) VALUES ('$name','$email','$phone','$gender','$pass','$natonality')";
      $result=mysqli_query($cons,$sql);

      if($result){
           echo 'The record has added successfully!<br>';
        }
     else{
       'The record has not added successfully! because of ------> '.mysqli_error($cons);
         }
    }
  }

  
 ?>