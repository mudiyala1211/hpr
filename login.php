<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydesign";

// Create connection
   $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(!empty($_POST)){
    $Username= $_POST['uname'];
    $Password= $_POST['password'];

     // $sql = "SELECT * FROM register WHERE uname='Hari' AND password ='hari1211'";
  /* for selecting multiple users */
  $sql ="SELECT * FROM register WHERE uname ='$Username' AND password ='$Password'";
      $result = mysqli_query($conn,$sql);
      if (mysqli_num_rows($result) > 0) 
      {

        echo "Success";
        //header('location:index1.html');
      }else{
        echo "Invalid Password or Username";
      }
}

$conn->close();
?>