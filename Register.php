<?php

include('config.php');

// Password validation function
function validate_password($password) {
    $errors = [];

    if (strlen($password) < 8) {
        $errors[] = "Password must be at least 8 characters long.";
    }

    if (strlen($password) > 20) {
        $errors[] = "Password must be no longer than 20 characters.";
    }

    if (!preg_match('/[A-Z]/', $password)) {
        $errors[] = "Password must contain at least one uppercase letter.";
    }

    if (!preg_match('/[a-z]/', $password)) {
        $errors[] = "Password must contain at least one lowercase letter.";
    }

    if (!preg_match('/\d/', $password)) {
        $errors[] = "Password must contain at least one digit.";
    }

    if (!preg_match('/[\W_]/', $password)) {
        $errors[] = "Password must contain at least one special character.";
    }

    if (preg_match('/\s/', $password)) {
        $errors[] = "Password must not contain spaces.";
    }

    return $errors;
}

if (isset($_POST['submit'])) {

    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $errors = validate_password($password);

    if (empty($errors)) {
        $pass = md5($password);
        $cpass = md5($cpassword);

        $select = "SELECT * FROM users WHERE email = '$email'";

        $result = mysqli_query($conn, $select);

        if (mysqli_num_rows($result) > 0) {
            $errors[] = 'User already exists!';
        } else {
            if ($pass != $cpass) {
                $errors[] = 'Passwords do not match!';
            } else {
                $insert = "INSERT INTO users(email, firstname, lastname, password) 
                           VALUES('$email','$firstname','$lastname','$pass')";
                mysqli_query($conn, $insert);
                header('Location: Login.php');
                exit();
            }
        }
    }

    // Display validation errors
    if (!empty($errors)) {
        echo '<div class="alert alert-danger" role="alert"><ul>';
        foreach ($errors as $error) {
            echo '<li>' . $error . '</li>';
        }
        echo '</ul></div>';
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
    <title>Coffee Shop | Register</title>
</head>
<body>

    <div class="container p-4">
        <div class="row">
            <div class="col-5">
                <img class="d-inline-block align-top" src="img/snorlax.png" height="500" width="500" alt="">
            </div>
            <div class="col bg-dark bg-gradient bg-opacity-75 text-white p-5">
                <h1 class="text-light fw-bolder">Create New Account</h1>
                <h3 class="text-light fw-bold">Start your day with a coffee</h3>
                <br>
                <p>Already have an Account? <a href="Login.php">Log in</a></p>
                <form action="" method="post">
                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">First name:</label>
                            <input type="text" name="firstname" class="form-control" required>
                        </div>
                        <div class="col">
                            <label class="form-label">Last name:</label>
                            <input type="text" name="lastname" class="form-control" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email address:</label>
                        <input type="email" name="email" class="form-control" required>
                        <div class="form-text text-white">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password:</label>
                        <input type="password" name="password" class="form-control" required>
                        <div class="form-text text-white">
                            - The password must be at least 8 characters long and must not contain spaces <br>
                            - The password must contain at least one lowercase and uppercase letter (A-Z) <br>
                            - The password must contain at least one digit and special character
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Confirm Password:</label>
                        <input type="password" name="cpassword" class="form-control" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    <br><br>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
