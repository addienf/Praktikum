<?php 
    include "connection.php";
    $id = $_GET['user_id'];

    $query = "SELECT * FROM users WHERE user_id='$id'";
    $result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <form action="actionEdit.php" method="post">
            <h1>Edit Mahasiswa</h1>
            <div class="input">
                <input type="text" name="user_id" class="form-control" 
                    value="<?php echo $row['user_id']; ?> " readonly>
            </div>
            <div class="input">
                <input type="text" name="user_name" class="form-control" 
                    value="<?php echo $row['user_name']; ?>">
            </div>
            <div class="input">
                <input type="text" name="user_email" class="form-control" 
                    value="<?php echo $row['user_email']; ?>">
                <i class='bx bx-user' ></i>
            </div>
            <button action="submit" type="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-primary mt-3" href="welcome.php" role="button">View</a>
        </form>
        <?php endwhile; ?>
    </div>
</body>
</html>