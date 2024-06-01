<!-- php -S localhost:8000 -->
<?php

include ('config.php');

session_start();

if(!isset($_SESSION['firstname'])){
   header('location:Home.php');
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

    <div class="container bg-green p-4 mt-5">
        <div class="col-8">
            <h1 class="text-light fw-bolder" style="font-size: 9vh;">Start you day <br> with a black coffee</h1>
            <p class="text-light fw-light" style="font-size: 3vh;">Choose and taste delicious coffee from the best beans.</p>
        </div>

        <ul class="nav ms-2">
            <li class="nav-item">
                <a href="Landing_menu.php" class="nav-link"><button type="button" class="btn btn-warning" style="width: 35vh;">Order Now</button></a>
            </li>
            <li class="nav-item">
                <a href="About.php" class="nav-link"><button type="button" class="btn btn-outline-warning" style="width: 35vh;">Learn About Us</button></a>
            </li>
        </ul>
    </div>

    <div class="container">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <h2 class="text-light fw-bolder d-flex justify-content-center">Popular Now</h1>
                <div class="carousel-item active">
                    <div class="container d-flex justify-content-center">
                        <div class="row m-2">
                            <div class="col m-3">
                                <div class="card mb-3 bg-black bg-gradient" style="max-width: 320px;">
                                    <div class="row g-0">
                                        <div class="col-md-4 d-flex align-items-center">
                                            <img src="img/logo.png" class="img-fluid rounded-start" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body text-white">
                                                <h5 class="card-title">Espresso Coffee</h5>
                                                <p class="card-text"><small class="text-body-secondary-white">With Milk</small></p>
                                                <p class="card-text fw-bold">$5.2</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col m-3">
                                <div class="card mb-3 bg-black bg-gradient" style="max-width: 320px;">
                                    <div class="row g-0">
                                        <div class="col-md-4 d-flex align-items-center">
                                            <img src="img/logo.png" class="img-fluid rounded-start" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body text-white">
                                                <h5 class="card-title">Cappuccino Coffee</h5>
                                                <p class="card-text"><small class="text-body-secondary-white">With Chocolate</small></p>
                                                <p class="card-text fw-bold">$6.3</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col m-3">
                                <div class="card mb-3 bg-black bg-gradient" style="max-width: 320px;">
                                    <div class="row g-0">
                                        <div class="col-md-4 d-flex align-items-center">
                                            <img src="img/logo.png" class="img-fluid rounded-start" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body text-white">
                                                <h5 class="card-title">Latte art Coffee</h5>
                                                <p class="card-text"><small class="text-body-secondary-white">With Milk</small></p>
                                                <p class="card-text fw-bold">$7.8</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>        
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container d-flex justify-content-center">
                        <div class="row m-2">
                            <div class="col m-3">
                                <div class="card mb-3 bg-black bg-gradient" style="max-width: 320px;">
                                    <div class="row g-0">
                                        <div class="col-md-4 d-flex align-items-center">
                                            <img src="img/logo.png" class="img-fluid rounded-start" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body text-white">
                                                <h5 class="card-title">Iced Coffee</h5>
                                                <p class="card-text"><small class="text-body-secondary-white">Caramel or Dark chocolate</small></p>
                                                <p class="card-text fw-bold">$5.2</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col m-3">
                                <div class="card mb-3 bg-black bg-gradient" style="max-width: 320px;">
                                    <div class="row g-0">
                                        <div class="col-md-4 d-flex align-items-center">
                                            <img src="img/logo.png" class="img-fluid rounded-start" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body text-white">
                                                <h5 class="card-title">Decaf Coffee</h5>
                                                <p class="card-text"><small class="text-body-secondary-white">Without Cafine</small></p>
                                                <p class="card-text fw-bold">$6.3</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col m-3">
                                <div class="card mb-3 bg-black bg-gradient" style="max-width: 320px;">
                                    <div class="row g-0">
                                        <div class="col-md-4 d-flex align-items-center">
                                            <img src="img/logo.png" class="img-fluid rounded-start" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body text-white">
                                                <h5 class="card-title">Frappé coffee</h5>
                                                <p class="card-text"><small class="text-body-secondary-white">With Steamed Milk</small></p>
                                                <p class="card-text fw-bold">$7.8</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>        
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container d-flex justify-content-center">
                        <div class="row m-2">
                            <div class="col m-3">
                                <div class="card mb-3 bg-black bg-gradient" style="max-width: 320px;">
                                    <div class="row g-0">
                                        <div class="col-md-4 d-flex align-items-center">
                                            <img src="img/logo.png" class="img-fluid rounded-start" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body text-white">
                                                <h5 class="card-title">Café au lait</h5>
                                                <p class="card-text"><small class="text-body-secondary-white">With Hot Milk</small></p>
                                                <p class="card-text fw-bold">$5.2</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col m-3">
                                <div class="card mb-3 bg-black bg-gradient" style="max-width: 320px;">
                                    <div class="row g-0">
                                        <div class="col-md-4 d-flex align-items-center">
                                            <img src="img/logo.png" class="img-fluid rounded-start" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body text-white">
                                                <h5 class="card-title">Ristretto</h5>
                                                <p class="card-text"><small class="text-body-secondary-white">With Espresso Shot</small></p>
                                                <p class="card-text fw-bold">$6.3</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col m-3">
                                <div class="card mb-3 bg-black bg-gradient" style="max-width: 320px;">
                                    <div class="row g-0">
                                        <div class="col-md-4 d-flex align-items-center">
                                            <img src="img/logo.png" class="img-fluid rounded-start" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body text-white">
                                                <h5 class="card-title">Doppio</h5>
                                                <p class="card-text"><small class="text-body-secondary-white">With 2x Espresso Shot</small></p>
                                                <p class="card-text fw-bold">$7.8</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</body>
</html>