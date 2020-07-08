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
// print_r($_POST);exit;
if(!empty($_POST)){
    $s1 = $_POST['uname'];
        $s2 = $_POST['email'];
        $s3 = $_POST['password'];
        $s4 = $_POST['gender'];
    $sql = "INSERT INTO register (uname, email, password,gender)
    VALUES ('$s1','$s2','$s3','$s4')";

      if (mysqli_query($conn, $sql)) {
            echo "New record created successfully" . "<br/>";
             header("location:registration.html");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}else{
   header("Location: http://localhost/task(10-4-19)/login.html");
}
$conn->close();
?>