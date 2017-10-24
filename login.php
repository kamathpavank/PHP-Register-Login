<?php
include("connect.php");
?>

<?php
    $email = $_POST["Email"];
    $password = $_POST["psw"];

    $sql = "SELECT * FROM MyGuests";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
           
            if($row['email'] == $POST['email'] && $row['password'] == $POST['psw']){
                echo "YOU ARE LOGGED IN";
            }
            else{
                echo "Please fil proper details";
                header('Location: login.php');
            }
        }
    } else {
        echo "0 results";
    }
    $conn->close();

?>