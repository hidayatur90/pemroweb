<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <title>Client Side Static Ajax</title>

    <style>
    * {
        margin: 0;
        padding: 0;
    }

    .background-color {
        background-color: white;
        background: linear-gradient(-45deg, #010332, #29011c, #530005);
        height: 100%;
    }

    .backgroung-image {
        background-image: url("https://media-assets-05.thedrum.com/cache/images/thedrum-prod/s3-news-tmp-10557-netflixa--default--1280.jpg");
    }

    .trash-icon:hover {
        transform: scale(1.2);
    }

    .red {
        color: red;
    }

    .edit-icon:hover {
        transform: scale(1.2);
    }

    .blue {
        color: blue;
    }

    .display {
        display: flex;
        justify-content: right;
        flex-direction: row;
    }

    .yellow {
        color: #effd5f;
        opacity: 30%;
    }

    .button {
        border: none;
        background-color: white;
    }

    .grey {
        background-color: grey;
    }
    </style>


</head>

<body>
    <thead>
        <div class="background-color">
            <div class="container-fluid align-self-start backgroung-image shadow-lg p-3 mb-5">
                <h1 class="text-white px-4 pt-4 fw-bolder">Travel and Explore the World of Cinema</h1>
                <div class="h4 text-white px-4 pb-4">The best series and movies streaming platform</div>
            </div>
            <div class="container justify-content-center align-self-center mg-3">
                <form action="" method="get" id="searchMovie">
                    <div class="input-group mb-5">
                        <input type="text" class="form-control" placeholder="Search by Movie Title" id="keyword">
                        <button class="btn btn-outline-secondary grey text-white" type="button" id="search">Search</button>
                    </div>
                </form>
    </thead>
    <div class="row" id="data">
        <?php
            require_once ("./db.php");
            $sql = "SELECT * FROM grid_film";
            $result = $db -> query($sql);
                            
            while ($row = $result->fetch_assoc()) :
            ?>

            <div class="col col-sm-12 col-md-6 col-lg-4 col-xxl-3 d-flex justify-content-center">
                <div class="col my-1 mb-4 d-flex justify-content-center">
                    <div class="card">
                        <img src="<?= $row["img"];?>" class="card-img-top p-2" alt="...">
                        <div class="card-body">
                            <h4 class="card-title"><?= $row["title"]?></h4>
                            <div class="d-flex justify-content-between">
                                <p class="card-text">Genre: <?= $row["rating"]?></p>
                                <div class="display">
                                    <button type="button" class="edit-icon button">
                                        <i class="bi bi-pencil-square blue mx-1"></i>
                                    </button>
                                    <button type="button" class="trash-icon button">
                                        <i class="bi bi-trash3-fill red mx-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php endwhile ; ?>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <script src="./script4.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

</body>

</html>