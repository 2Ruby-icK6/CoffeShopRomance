<?php
include('config.php');

session_start();

if (isset($_POST['submit'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);

    $select = "SELECT * FROM users WHERE email = '$email' AND password = '$pass'";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        $_SESSION['firstname'] = $row['firstname'];
        header('Location: Landing_page.php');
        exit();
    } else {
        $error = 'Incorrect email or password!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/logo.png" type="image/png">
    <title>Coffee Shop | Login</title>
</head>
<body>

    <div class="container p-4">
        <div class="row">
            <div class="col-5">
                <img class="d-inline-block align-top" src="img/snorlax.png" height="500" width="500" alt="">
            </div>
            <div class="col bg-dark bg-gradient bg-opacity-75 text-white p-5">
                <h1 class="text-light fw-bolder">Welcome Back!</h1>
                <h4 class="text-light fw-bold">Start your day with a coffee</h4>
                <br>
                <p>Don't have an Account? <a href="Register.php">Register Now</a></p>
                <form method="POST" action="">
                    <?php
                    if (isset($error)) {
                        echo '<div class="alert alert-danger" role="alert">' . $error . '</div>';
                    }
                    ?>
                    <div class="mb-3">
                        <label class="form-label">Email address:</label>
                        <input type="email" name="email" class="form-control" required>
                        <div class="form-text text-white">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password:</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary" value="login now">Submit</button>
                    <br><br>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
