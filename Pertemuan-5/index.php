<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>1057 | Pertemuan 5</title>
    <style>
        body {
            background-color: black;
            background-image: url("img/netflix.jpg");
        }   
        .title {
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            color: white;
        }
        .card {
            margin-top: 20px;
            height: auto;
            width: auto;
            transition: transform .2s;
            background-color: rgb(236, 236, 236);
        }
        .card:hover{
            transform: scale(1.1);
        }
        .card-img-top {
            margin: 10px;
            min-height: 27rem;
            max-height: auto;
            width: auto;
        }
        .red {
            color: red;
        }
        .card-body {
            font-family: Arial, Helvetica, sans-serif;
            /* font-weight: bold; */
        }
        .icon {
            display: flex;
            justify-content: right;
            flex-direction: row;
            transition: transform .2s;
            margin-top: -40px;
        }
        .trash-icon:hover{
            transform: scale(1.5);
        }
        .edit-icon:hover{
            transform: scale(1.5);
        }
        footer {
            font-family: Arial, Helvetica, sans-serif;
            margin: 40px 40px;
            color: white;
        }
        button{
            border:none;
            color: blue;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="title text-center mt-4">
            <h1>CLIENT SIDE STATIC 2</h1>
            <h4>- Layout and Grid -</h4>
        </div>

        <div class="input-group my-3 col-12 col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-10">
            <input type="text" class="form-control ms-3" placeholder="Search by Movie Title" id="search">
            <select name="rating" class="form-select ms-4" id="rating">
                <option value="" disabled selected>Search by Movie Rating</option>
                <option value="">All Rating</option>
                <option value="PG">PG</option>
                <option value="G">G</option>
                <option value="NC-17">NC-17</option>
                <option value="GG">GG</option>
                <option value="R-BO">R-BO</option>
                <option value="A">A</option>
            </select>
            <button class="btn btn-primary me-4" type="button" id="submit">Submit</button>
        </div>

        <div class="row" id="data">
        <?php
            require_once ("./db.php");
            $sql = "SELECT * FROM grid_film";
            $result = $db->query($sql);
            while ($row = $result->fetch_assoc()) { ?>

            <div class="col-12 col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 mx-0.5 my-1">
                <div class="card">
                    <img src="<?= $row["img"]; ?>" class="card-img-top" alt="No connection">
                    <div class="card-body">
                        <h4 class="card-title"><?= $row["title"]; ?></h4>
                        <p class="card-text"><?= $row["rating"]; ?></p>
                        <div class="icon">
                            <button type="button" class="edit-icon">
                                <i class="bi bi-pencil-square mx-1"></i>
                            </button>
                            <button type="button" class="trash-icon">
                                <i class="bi bi-trash3-fill red mx-1"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

    <footer class="container-fluid text-center">
        <p>&#169; 202410101057-Muhammad Hidayatur Rahman</p>
    </footer>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- pooper js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="./scriptTitle.js"></script>
    <script src="./scriptRating.js"></script>
</body>
</html>