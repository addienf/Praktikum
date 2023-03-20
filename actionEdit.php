<?php 
    include 'connection.php';

    $id = $_POST['user_id'];
    $nama = $_POST['user_name'];
    $email = $_POST['user_email'];
    

    $query = "UPDATE users set user_name='$nama',
    user_email='$email',
    WHERE user_id='$id'";

    $q = "UPDATE users set user_name = '$nama', user_email = '$email' WHERE user_id='$id'";

    mysqli_query($conn, $q);
    echo "Error: " . mysqli_error($conn);

    header("location:welcome.php");
    die();
?>