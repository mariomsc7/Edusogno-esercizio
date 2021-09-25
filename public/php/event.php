<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page page</title>
</head>

<body>
<?php
  
    $event_name = $_POST['event_name'];
    $event_description = $_POST['event_description'];
    $event_date = $_POST['event_date'];
    $event_time = $_POST['event_time'];
    
  // CONNECT
  
  $conn = new mysqli('localhost', 'root', 'root','edu_test');
  
  
  if ($conn->connect_error) {
      die('Connection Failed: ' . $conn->connect_error);
  } else {

    $stmt = $conn->prepare('insert into eventi(event_name, event_description, event_date, event_time) 
    values(?,?,?,?)');
    $stmt->bind_param('ssss', $event_name, $event_description, $event_date, $event_time);
    $stmt->execute();
    echo 'Registrato';
    var_dump($stmt);
    $stmt->close();

    $conn->close();
}

?>
</body>
