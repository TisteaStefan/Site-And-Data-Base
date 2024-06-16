<?php
$conn = mysqli_connect("localhost", "root", "", "login");
if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$name = $_REQUEST['username'];
$password = md5($_REQUEST['parola']); 

$query = "SELECT * FROM login";
$OK = 0;

$mysqli = new mysqli("localhost", "root", "", "login");

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        if ($name == $row['username']) {
            if ($password == $row['password']) {
                $OK = 1;
                header("Location: index.php");
            }
        }
    }

    if ($OK == 0) {
          echo '<script type="text/javascript">
            alert("passwrod error");
            window.location.href= "login.php";
        </script>
        ';
        
      
    }
}

mysqli_close($conn);
?>
