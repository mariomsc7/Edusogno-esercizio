<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page page</title>
</head>

<body>
<?php
  
    $name = $_POST['name'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    
  // CONNECT
  
  $conn = new mysqli('localhost', 'root', 'root','edu_test');
  
  
  if ($conn->connect_error) {
      die('Connection Failed: ' . $conn->connect_error);
  } else {

    $stmt = $conn->prepare('insert into utenti(name, lastname, email) 
            values(?,?,?)');
    $stmt->bind_param('sss', $name, $last_name, $email);
    $stmt->execute();
    echo 'Registrato';
    var_dump($stmt);
    $stmt->close();

    $conn->close();

  }

?>
</body>
