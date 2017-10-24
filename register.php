
<?php
include("connect.php");
?>

<?php
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $password = $_POST["psw"];
    
    $sql = "INSERT INTO Member ( name, email, password)
    VALUES ($name,$email,$password)";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    
?>

