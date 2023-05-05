<?php

 $connection= mysqli_connect("localhost","root","root","HouseDeal");
               $error = mysqli_connect_error();
               
               if ($error != null)
               {
                   echo "<p> Can't Connect to Database </p>";
               }
               else{
 $resultedID = mysqli_query($connection, "SELECT id FROM HomeSeeker ORDER BY id DESC LIMIT 1;");             
 while($row = mysqli_fetch_row($resultedID))
 {
 $id = $row[0] +1;
 }

$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$age = filter_input(INPUT_POST, "age");
$familyNum = filter_input(INPUT_POST, "familynum");
$income = filter_input(INPUT_POST,"income" );
$job = filter_input(INPUT_POST, "job");
$phone = filter_input(INPUT_POST, "phone");
$email = filter_input(INPUT_POST, "email");
$pass = filter_input(INPUT_POST, "pass");        
        
$query =" SELECT `email_address`, `password` FROM `HomeSeeker` WHERE email_address = '$email'";
$sql = mysqli_query($connection, $query); 
$num = mysqli_num_rows($sql);
 if($num > 0)  {
        echo'  <h3 style="text-align:center; color:red; background-color:beige;">  email address already exists! <br>
            Please go Back and Enter Correct Credentials</br></h3>';
          echo'<input type="button" name="backbtn"   style=\'  background-color: darkblue; color: white;  font-size: 20px;  width: 15%; position: fixed; top: 15%; right:43%; \'  value="Go Back"  onclick="location.href = \'signUp2.html\'" >';      }
		
else{
	
//do your insert code here or do something (run your code)
//if(isset(filter_input(INPUT_POST, 'submitbtn'))){ // Fetching variables of the form which travels in URL
if($email !=''){
//Insert Query of SQL
$query = mysqli_query($connection, "INSERT INTO HomeSeeker (id, first_name, last_name, age, family_members, income, job, phone_number, email_address, password) VALUES('$id','$firstname', '$lastname', $age, $familyNum,$income, '$job','$phone','$email','$pass')");
$id++;
header('location:HomeSeeker.html');
}
else{
  echo'  <h3 style="text-align:center; color:red; background-color:beige;">  Inseertion FAILED!  <br>
            Some fileds are blank, Please go Back and Enter Correct Credentials</br></h3>';
          echo'<input type="button" name="backbtn"   style=\'  background-color: darkblue; color: white;  font-size: 20px;  width: 15%; position: fixed; top: 15%; right:43%; \'  value="Go Back"  onclick="location.href = \'signUp2.html\'" >';      }
		
}
               
               
}//end else for connection

    