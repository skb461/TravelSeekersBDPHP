<?php
include 'db.php';

// Fetch all tour plans from the database
$plans = $conn->query("SELECT * FROM tour_plans")->fetchAll(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="en" data-theme="dark">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- owlcarusal -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- custon css -->
    <link rel="stylesheet" href="style.css">

    <title>Travel Seekers BD</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="image/TravelSeekerBd.png" style="width: 80px;" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-6 fw-bold">
              <li class="nav-item mx-4">
                <a class="nav-link active" aria-current="page" href="index.php">
                    <img src="image/house.png" class="img-fluid" style="width: 30px;" alt=""> Home
                </a>
              </li>
              <li class="nav-item mx-4">
                <a class="nav-link" href="plan.php">
                    <img src="image/tour-guide.png" class="img-fluid" style="width: 30px;" alt=""> Plan
                </a>
              </li>
              <li class="nav-item mx-4">
                <a class="nav-link" href="destination.php">
                    <img src="image/destination.png" class="img-fluid" style="width: 30px;" alt=""> Destination
                </a>
              </li>
              <li class="nav-item mx-4">
                <a class="nav-link" href="contact.php">
                    <img src="image/operator.png" class="img-fluid" style="width: 30px;" alt=""> 
                    Contact
                </a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <section id="client" class="container-fluid py-5">
        <div class="container" style="height: 20vh; margin-top: 10%;">
            <p class="text-center text-light display-1 fw-bolder">Our All Plans</p>
        </div>
    </section>
    <!-- Plan List -->
    <section id="plan" class="container-fluid py-5">
        <div class="container py-5">
            <h1 class="text-center mb-5">All Tour Plans</h1>
            <div class="row">
                <?php foreach ($plans as $plan): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card p-0 shadow-sm">
                            <img src="image/image1.jpg" class="card-img-top" alt="<?= $plan['title'] ?>">
                            <div class="card-body">
                                <h4 class="card-title"><?= $plan['title'] ?></h4>
                                <p class="card-text">Destination: <?= $plan['destination'] ?></p>
                                <p class="card-text">Price: Tk <?= $plan['price'] ?></p>
                                <p class="card-text">Duration: <?= $plan['duration'] ?></p>
                                <a href="planDetail.php?id=<?= $plan['id'] ?>" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    
    <footer class="container-fluid p-5 bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="col mx-4" style="display: flex; flex-direction: column; justify-content: center;">
                    <img src="image/TravelSeekerBd.png" class="img-fluid" alt="">
                </div>
                <div class="col mx-4" style="display: flex; flex-direction: column; justify-content: center;">
                    <p class="text-warning fs-1 fw-light text-center">
                        Where travel<br>
                        <span class="text-light display-4 fw-bold">meets</span><br>
                        technology
                    </p>
                </div>
                <div class="col mx-4">
                    <h4 class="text-light fw-bolder">
                        Overview
                    </h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-transparent text-light"><a href="#" class="btn text-light">Home</a></li>
                        <li class="list-group-item bg-transparent text-light"><a href="#" class="btn text-light">Plans</a></li>
                        <li class="list-group-item bg-transparent text-light"><a href="#" class="btn text-light">Destination</a></li>
                        <li class="list-group-item bg-transparent text-light"><a href="#" class="btn text-light">Contact</a></li>
                    </ul>
                </div>
                <div class="col mx-4">
                    <h4 class="text-light fw-bolder">
                        Contact Info
                    </h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-transparent text-light text-start"><a href="mailto:travelseekersbd@gmail.com" class="text-light text-decoration-none">Email:<br>travelseekersbd@gmail.com</a></li>
                        <li class="list-group-item bg-transparent text-light text-start"><a href="tel:+8801884710862" class="text-light text-decoration-none">Phone:<br>01884-710862</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
