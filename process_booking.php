<?php

$conn = mysqli_connect('fdb1034.awardspace.net', '4730960_1911threads', 'Taona@144', '4730960_1911threads');

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $service = $_POST['service'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $details = $_POST['details'];
  


    $sql = "INSERT INTO book_form (name, phone, service, email, date, details) 
            VALUES ('$name', '$phone', '$service', '$email', '$date', '$details')";

    if(mysqli_query($conn, $sql)){
        header("Location: orders.php?status=success");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }

} else {
    echo 'Something went wrong, try again!';
}
?>