<!-- php -S localhost:8000 -->
<?php

    include ('config.php');

    session_start();

    if(!isset($_SESSION['firstname'])){
    header('location:Login.php');
    }

    $name = mysqli_real_escape_string($conn, $_SESSION['firstname']);


    $select = "SELECT * FROM users WHERE firstname = '$name'";
    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){

        $row = mysqli_fetch_array($result);
        
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $email = $row['email'];
       
     }
     
     else{
        $error[] = 'NONE';
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
    <title>Coffee Shop | Home</title>
</head>
<body class="bg-black">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <div class="container bg-black">
        <div class="row d-flex align-items-center">
            <div class="col">
                <a class="navbar-brand" href=""><img class="d-inline-block align-top" height="100" width="100" src="img/logo.png" alt="Logo"></a>
            </div>
            <div class="col">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a href="Landing_page.php" class="nav-link active text-light fw-bolder">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="About.php" class="nav-link active text-light">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="Landing_menu.php" class="nav-link active text-light">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a href="Profile.php" class="nav-link active text-light">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a href="Contact.php" class="nav-link active text-light">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="col">
                <ul class="nav justify-content-center">
                <li class="nav-item">
                        <a href="Logout.php" class="nav-link"><button type="button" class="btn btn-outline-warning">Log Out</button></a>
                    </li>
                    <!-- <li class="nav-item">
                        <a href="Register.php" class="nav-link"><button type="button" class="btn btn-warning">Sign up</button></a>
                    </li> -->
                </ul>
            </div>
        </div>
    </div>

    <!-- <div class="container bg-green p-4 mt-5">
        <div class="col-8">
            <h1 class="text-light fw-bolder" style="font-size: 9vh;">Start you day <br> with a black coffee</h1>
            <p class="text-light fw-light" style="font-size: 3vh;">Choose and taste delicious coffee from the best beans.</p>
        </div>

        <ul class="nav ms-2">
            <li class="nav-item">
                <a href="#" class="nav-link"><button type="button" class="btn btn-warning" style="width: 35vh;">Order Now</button></a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"><button type="button" class="btn btn-outline-warning" style="width: 35vh;">Learn About Us</button></a>
            </li>
        </ul>
    </div> -->

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card bg-dark bg-gradient bg-opacity-75">
                <img src="img/profile.jpg" class="card-img-top" alt="Profile Picture">
                <div class="card-body text-center">
                    <h5 class="card-title text-white text-capitalize"><?php echo "$firstname $lastname"?></h5>
                    <p class="card-text text-white">Co-Founder & Barista</p>
                    <a href="#" class="btn btn-primary btn-block">Shop Cart</a>
                </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card bg-dark bg-gradient bg-opacity-75">
                <div class="card-body bg-dark bg-gradient bg-opacity-75">
                    <h4 class="card-title text-white text-capitalize">About <?php echo "$firstname"?></h4>
                    <p class="card-text text-white"><?php echo "$firstname $lastname"?> is one of the co-founders of Coffee Shop Romance. 
                    With over a decade of experience in the coffee industry, <?php echo "$firstname"?> is passionate about creating the perfect cup 
                    of coffee and fostering a welcoming community space. When <?php echo "$firstname"?> is not at the café, you can find him exploring 
                    new coffee trends and experimenting with unique brewing techniques.</p>
                    <h4 class="card-title text-white">Contact Information</h4>
                    <ul class="list-unstyled text-white">
                    <li><strong>Email:</strong> <?php echo "$email"?></li>
                    </ul>
                    <h4 class="card-title text-white">Social Media</h4>
                    <a href="#" class="btn btn-primary btn-sm">Facebook</a>
                    <a href="#" class="btn btn-info btn-sm">Twitter</a>
                    <a href="#" class="btn btn-danger btn-sm">Instagram</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>