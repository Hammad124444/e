<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>About-us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font: 14px sans-serif;
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding:0px;
        }

        html {
            box-sizing: border-box;
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }

        .column {
            float: left;
            width: 33.33%;
            margin-bottom: 16px;
            padding: 0 8px;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            margin: 8px;
        }

        .about-section {
            padding: 50px;
            text-align: center;
            width:100%;
            background-color: #474e5d;
            color: white;
        }

        .container {
            padding: 0 16px;
        }

        .container::after,
        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .title {
            color: grey;
        }

        .button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
        }

        .button:hover {
            background-color: #555;
        }

        @media screen and (max-width: 650px) {
            .column {
                width: 100%;
                display: block;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <img src="img/logo.jpg" width="50px" hieght="50px">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="welcome.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="voting.php">Voting</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="About-us.php">About-Us</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    <p>
                        <a href="reset-password.php" class="btn btn-warning">Reset</a>
                        <a href="logout.php" class="btn btn-danger ml-3">Logout</a>
                    </p>
                </span>
            </div>
        </div>
    </nav>

    <div class="about-section">
        <h1>About Us Page</h1>
    </div>
    <h2 class="text-center">Our Team</h2>
   <div class="container">
    <div class="row">
        <div class="column">
            <div class="card">
                <img src="img/noman.jpg" alt="Muhammad Noman" style="width:100%">
                <div class="container">
                    <h2>Muhammad Noman</h2>
                    <p class="title">Web Developer</p>
                    <p></p>
                    <p>@example.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="img/Asad.jpg" alt="Asad Javed" style="width:100%">
                <div class="container">
                    <h2>Muhammad Asad Javed</h2>
                    <p class="title">Web Designer</p>
                    <p></p>
                    <p>@example.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="img/hammad.jpg" alt="Hammad Shabir" style="width:100%">
                <div class="container">
                    <h2>Hammad Shabir</h2>
                    <p class="title text-bold">Front End Designer</p>
                    <p></p>
                    <p>hh2714187@gmail.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>
    </div>

   </div>


    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>Binomial Voting System
                        </h6>
                        <p>Binomial Voting system is voting system for PPLA to make quick and Secure Voting
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Languages
                        </h6>
                        <p>
                            <a href="#!" class="text-reset" style="text-decoration: none;">PHP</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset" style="text-decoration: none;">HTML</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset" style="text-decoration: none;">CSS</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset" style="text-decoration: none;">Bootstrap</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p><i class="fab fa-facebook">
                                <a href="#!" class="text-reset" style="text-decoration: none;">Facebook</a></i>
                        </p>
                        <p><i class="fab fa-twitter">
                                <a href="#!" class="text-reset" style="text-decoration: none;">Twitter</a></i>
                        </p>
                        <p><i class="fab fa-instagram">
                                <a href="#!" class="text-reset" style="text-decoration: none;">Instagram</a></i>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Contact
                        </h6>
                        <p><i class="fas fa-home "></i> Lahore, Pakistan</p>
                        <p>
                            <i class="fas fa-envelope "></i>
                            hh2714187@gmail.com
                        </p>
                        <p><i class="fas fa-phone "></i> + 92 316 0411 646</p>
                        <p><i class="fas fa-print "></i> + 92 234 5674 89</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2021 Copyright:
            <a class="text-reset fw-bold "style="text-decoration: none;">Noman & Team</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>