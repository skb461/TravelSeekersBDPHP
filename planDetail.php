<?php
include 'db.php';

// Get the plan ID from the query string
$plan_id = $_GET['id'] ?? 1;  // Default to 1 if no ID is provided

// Fetch the plan details
$query = $conn->prepare("SELECT * FROM tour_plans WHERE id = :id");
$query->bindParam(':id', $plan_id, PDO::PARAM_INT);
$query->execute();
$plan = $query->fetch(PDO::FETCH_ASSOC);
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
            <p class="text-center text-light display-1 fw-bolder"><?= $plan['title'] ?></p>
        </div>
    </section>



    <section class="container-fluid p-0">
        <div class="row">
            <div class="col-6">
                <div id="carouselExampleFade" class="carousel slide carousel-fade p-0" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="image/image1.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="image/image2.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon fw-bolder" aria-hidden="true"></span>
                      <span class="visually-hiddenr">Previous</span>
                    </button>
                    <button class="carousel-control-next bg-dark" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                      <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
                      <span class="fw-light fs-1">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-5 mx-auto" style="display: flex; flex-direction: column; justify-content: center;">
                <h6 class="text-muted fw-light">Organizing Agency: <span class="text-dark"><?= $plan['organizing_agency'] ?></span></h6>
                <h1 class="text-dark fw-light">
                    Duration: <span class="text-dark fw-normal"><?= $plan['duration'] ?></span>
                </h1>
                <h1 class="text-dark fw-light">
                    Price: <span class="text-warning fw-normal display-1"><em>BDT <?= $plan['price'] ?></em></span>
                </h1>
                <h1 class="text-dark fw-light">
                    Requarments: <span class="text-danger fw-normal"><em>Copy Of NID</em></span>
                </h1>
                <img src="image/signpost.png" class="ms-auto me-5" alt="" style="transform: rotate(35deg);width: 15%; opacity: 0.6; margin-top: -8%;">
                <div class="">
                  <a href="#" class="btn btn-outline-warning fw-bolder btn-lg">Book Now</a>
                </div>
            </div>
        </div>
        <div class="container-fluid pt-3 mt-5" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;  border-radius: 25% 25% 0% 0%; border-top: 15px solid #fec802;">
          <div class="p-5 rounded container">
            <div class="row">
              <div class="col-6" style="display: flex; flex-direction: column; justify-content: center;">
                <h1 class="display-1 text-dark fw-bolder"><em>Tour Details</em></h1>
              </div>
              <div class="col-6">
                <div class="polaroid rotate_right div">
                  <img src="image/TravelSeekerBd.png" alt="Pulpit rock" width="260" height="213">
                  <p class="caption">Where travel meets technology</p>
                </div>
                
                <div class="polaroid rotate_left div">
                  <img src="image/america.png" alt="Monterosso al Mare" width="260" height="213">
                  <p class="caption">Second Company Tag line</p>
                </div>
              </div>
            </div>
            <div class="py-4">
              <h4><img src="image/trip.png" style="width: 50px; transform: rotate(5deg);" alt=""> Overview</h4>
              <p class="text-muted" style="text-align: justify;">
                <?= $plan['description'] ?>
              </p>
            </div>
            <div class="py-4">
              <h4><img src="image/travel_place.png" style="width: 50px; transform: rotate(-35deg);" alt=""> Location</h4>
              <p class="text-muted" style="text-align: justify;">
                <span class="fw-bold">Pick-up:</span> <?= $plan['pickup_location'] ?>
              </p>
              <p class="text-muted" style="text-align: justify;">
                <span class="fw-bold">Around:</span> <?= $plan['around_locations'] ?>
              </p>
            </div>
            <div class="py-4">
              <h4><img src="image/december-2.png" style="width: 50px; transform: rotate(-5deg);" alt=""> Location</h4>
              <p class="text-muted" style="text-align: justify;">
                Three days and Two Nights
              </p>
              <p class="text-muted" style="text-align: justify;">
                <span class="fw-bold">Duration:</span>  3 days
              </p>
            </div>
            <div class="py-4">
              <h4><img src="image/travel.png" style="width: 50px; transform: rotate(-10deg);" alt=""> Inclusion & Exclusion</h4>
              <p class="text-muted" style="text-align: justify;">
                <span class="fw-bold">Pick-up:</span> Cox's Bazar Airport
              </p>
              <p class="text-muted" style="text-align: justify;">
                <span class="fw-bold">Around:</span> Kolatoli Beach, Marine Drive, Doria Nagar Beach, Himchari National Park, Kakra Beach, Mermaid Beach Resort, Mermaid Eco Resort, Reju Canal, Inani Sea Beach, Patuartek Beach
              </p>
            <ul class="list-group">
                <?php foreach (explode(',', $plan['inclusion']) as $item): ?>
                    <li class="list-group-item">
                        <img src="image/checked.png" style="width: 30px;" alt=""> <?= $item ?>
                    </li>
                <?php endforeach; ?>

                <?php foreach (explode(',', $plan['exclusion']) as $item): ?>
                    <li class="list-group-item">
                        <img src="image/no.png" style="width: 30px;" alt=""> <?= $item ?>
                    </li>
                <?php endforeach; ?>
            </ul>
            </div>
          </div>
          <img src="image/tour-guide.png" class="ms-auto d-block me-5" alt="" style="transform: rotate(-10deg);width: 15%; opacity: 0.6; margin-top: -15%;
          margin-bottom: 5%;">
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
