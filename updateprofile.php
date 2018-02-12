<?php
session_start();
require("connection.php");
      $con = connect("news_adda");
      
if(isset($_POST['save_changes']))
	{	
			$name = $_SESSION['user_name'];
		       $password = test_input($_POST["password"]);
      $confirmpassword = test_input($_POST["confirmpassword"]);
      $Email = test_input($_POST["email"]);
      $First = test_input($_POST["first_name"]);
      $Last = test_input($_POST["last_name"]);
      if(($password != NULL ) && ($password == $confirmpassword ))
      	{
      		//echo 'souvik'.$confirmpassword ;
      			 $query = "UPDATE user_signup SET email = '$Email' , password = '$password',firstname = '$First',lastname = '$Last'  WHERE username = '$name' ";
          if(mysqli_query($con,$query))
          {
              echo "succesfull";
              session_start();

              $_SESSION['user_name'] = $name;
              $_SESSION['password']=$password;
              $_SESSION['email'] = $Email;
               $_SESSION['first_name'] = $First;
                $_SESSION['last_name'] = $Last;
              print_r($_SESSION);
              header("Location:home.php");
          }
          else
          {
              die("not successful");
          }
      }
      		else
      			die('Confirm password is not equal to password');



      		}
else if(isset($_POST['cancel']))
	{
		Header("Location:home.php");
	}
	else
		die('immediately');
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  if($data == ""){
    die("invalid credentials");
  }
  return $data;
}
?>