

        <?php
                 session_start();

                ini_set('display_errors', 1);
                ini_set('display_startup_errors', 1); 
                error_reporting(E_ALL);
                

               $connection= mysqli_connect("localhost","root","root","HouseDeal");
               $error = mysqli_connect_error();
               
               if ($error != null)
               {
                   echo "<p> Can't Connect to Database </p>";
               }
               else{
                   $role = filter_input(INPUT_POST,'type');
                   $uemail =  filter_input(INPUT_POST,'email');
                   $upass =  filter_input(INPUT_POST,'pass');
                   
 if($role == 'owner')
 {                    echo'<h5 style="text-align:center;"> **Owner** </h5>';

      $query =" SELECT `email_address`, `password` FROM `Homeowner` WHERE email_address = '$uemail' AND password = '$upass'  ";
      $sql = mysqli_query($connection, $query); 
      $num = mysqli_num_rows($sql);
      if($num > 0) {
        //$row = mysqli_fetch_array($sql);
        //header("location:check.php");
        //exit();
          if ( !isset($_SESSION['loginbtn'] )) {
            $_SESSION['email'] = filter_input(INPUT_POST, 'email');
            $_SESSION['pass'] = filter_input(INPUT_POST, 'pass');
            $_SESSION['loggedin'] = true;
           //  echo"<hr><h1> successfully logged in </h1></hr>";  /////////redirect here
             header("location:Homeowner_1.html");
         } 
    }
    
    else { 
        echo'  <h3 style="text-align:center; color:red; background-color:beige;">Sorry Invalid email and Password<br>
            Please go Back and Enter Correct Credentials</br></h3>';
          echo'<input type="button" name="backbtn"   style=\'  background-color: darkblue; color: white;  font-size: 20px;  width: 15%; position: fixed; top: 15%; right:43%; \'  value="Go Back"  onclick="location.href = \'login.html\'" >';
}}
   
    
 
 else{ 
     if($role == 'seeker')
 {                    echo'<h5 style="text-align:center;"> **Seeker** </h5>';

      $query =" SELECT `email_address`, `password` FROM `HomeSeeker` WHERE email_address = '$uemail' AND password = '$upass'  ";
      $sql = mysqli_query($connection, $query); 
      $num = mysqli_num_rows($sql);
      if($num > 0) {
        //$row = mysqli_fetch_array($sql);
        //header("location:check.php");
        //exit();
          if ( !isset($_SESSION['loginbtn'] )) {
            $_SESSION['email'] = filter_input(INPUT_POST, 'email');
            $_SESSION['pass'] = filter_input(INPUT_POST, 'pass');
            $_SESSION['loggedin'] = true;
           //  echo"<hr><h1> successfully logged in </h1></hr>";  /////////redirect here
             header("location:HomeSeeker.html"); ////////////////////////////////////////////////////////////////////////
         } 
    }
    
    else { 
      echo'  <h3 style="text-align:center; color:red; background-color:beige;">Sorry Invalid email and Password<br>
            Please go Back and Enter Correct Credentials</br></h3>';
          echo'<input type="button" name="backbtn"   style=\'  background-color: darkblue; color: white;  font-size: 20px;  width: 15%; position: fixed; top: 15%; right:43%; \'  value="Go Back"  onclick="location.href = \'login.html\'" >';
 }}
 
    }
               
 
       
         
 
 
 
 
 
 
 
 
 
 
    }//end 1st else        
               
               

               
               
               ?>
