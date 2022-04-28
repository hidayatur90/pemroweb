<?php

require_once('db.php');

$film_id = $_GET['id'];
 
$result = mysqli_query($db, "SELECT * FROM film WHERE film_id=$film_id");
 
while($row = mysqli_fetch_array($result))
{
	$title = $row['title'];
	$description = $row['description'];
	$release_year = $row['release_year'];
	$rental_duration = $row['rental_duration'];
	$rental_rate = $row['rental_rate'];
	$length = $row['length'];
	$replacement_cost = $row['replacement_cost'];
	$rating = $row['rating'];
	$special_features = $row['special_features'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title><?= $title; ?></title>
    <style>        
        body {
            background-color: black;
            background-image: url("img/netflix.jpg");
        }   
        img {
            float: left;
        }
        .card { 
            background-color: rgba(245, 245, 245, 0.8); 
        }
        .card-header, .card-footer { 
            opacity: 1
        }
    </style>
</head>
<body>
<section class="my-5">
    <div class="container px-4">
        <div class="row">
            <div class="card mt-3 col-12 col-xxl-12 col-xl-12 col-lg- col-md-5 col-sm-6">
                <div class="card-body ms-2">
                    <a href="index.php" class="btn btn-primary mb-3">
                        <span class="bi bi-arrow-left me-2"></span>Kembali
                    </a>
                    <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3 text-center text-sm-start">
                        <img src="img/no-image.png" alt="<?= $title; ?>" width="250" height="400" class="me-4">    
                    </div>
                    <div class="mt-3 mt-sm-0 col text-center text-sm-start">
                        <h3><strong><?= $title; ?></strong> (<?= $release_year; ?>)</h3>
                        <p>Rating : <strong><?= $rating; ?></strong></p>
                        <p>Duration : <strong><?= $length; ?> </strong> minutes </p>
                    </div>
                    <div class="desc">
                        <p>With Special Features : <?= $special_features; ?></p>
                        <h5>Description</h5>
                        <p><?= $description; ?></p>
                    </div>
                </div>
                <div class="row text-center my-4 mx-3">
                    <h5 class="text-start ms-4">More Details</h5>
                    <table class="table table-light table-bordered table-responsive-sm">
                        <thead class="col-6 col-md-3">
                            <tr>
                            <th scope="col">Language</th>
                            <th scope="col">Rental Duration</th>
                            <th scope="col">Rental Rate</th>
                            <th scope="col">Replacement Cost</th>
                            </tr>
                        </thead>
                        <tbody class="col-6 col-md-3">
                            <tr>
                                <td>English</td>
                                <td><?= $rental_duration; ?> days</td>
                                <td>$<?= $rental_rate; ?></td>
                                <td>$<?= $replacement_cost; ?></td>
                            </tr>
                        </tbody>
                    </table>        
                </div>
            </div>
        </div>
    </div>
</section>
<script src="./js/bootstrap.bundle.js"></script>
</body>
</html>