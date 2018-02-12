<?php
if(isset($_POST['signup_submit']))
{
        require("connection.php");
      $con = connect("news_adda");
      $name = test_input($_POST["user_name"]);
      $password = test_input($_POST["password"]);
      $Email = test_input($_POST["email"]);
      $First = test_input($_POST["first_name"]);
      $Last = test_input($_POST["last_name"]);
      $query = "SELECT * FROM user_signup where username='$name' or email = '$Email'";
      $res=mysqli_query($con,$query);
      if(mysqli_num_rows($res) > 0)
      {
            die ("username already exists or email already exists");
      }
      else
      {
          $query = "INSERT INTO user_signup VALUES ('$name','$Email','$password','$First','$Last')";
          if(mysqli_query($con,$query))
          {
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
}
else if(isset($_POST['submit'])){
      require("connection.php");
        $con = connect("news_adda");
        $name = test_input($_POST["user_name"]);
      $password = test_input($_POST["pwd"]);
          $query = "SELECT * from user_signup WHERE username = '$name' and password = '$password' ";
            $res = mysqli_query($con,$query);
          if(mysqli_num_rows($res)>0)
          {
              $row = mysqli_fetch_row($res);
              session_start();
              $_SESSION['user_name'] = $row[0];
              $_SESSION['password']=$row[2];
              $_SESSION['email'] = $row[1];
               $_SESSION['first_name'] = $row[3];
                $_SESSION['last_name'] = $row[4];
               /* if($row[0] == "hello" && $row[2]== "hello")
                  header("Location:admin.php");
                else*/
             header("Location:home.php");
          }
            else {
              
              session_start();
              $_SESSION['text'] = "invalid username or password";
              header("Location:index.php"); 
              /* echo '<script>' ;
                echo 'alert("wrong credentials");';
                echo ' if (confirm("Invalid Credentials") == true)';
                   echo ' header("Location:login2.php"); ' ;
                  echo 'else header("Location:login2.php");';
              echo '</script>';
              sleep(1);
             header("Location:login2.php");*/
            }
}


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