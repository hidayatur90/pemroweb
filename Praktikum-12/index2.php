<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>1057 | Praktikum 12</title>
    <style>
        h1 {
            font-size: 2em;
        }
        body {
            background-color: black;
            background-image: url("assets/netflix.jpg");
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
    <div class="container my-5">
        <div class="float-end me-4">
            <a href="form.php" class="btn btn-primary">
                <i class="bi bi-plus-circle-fill white"></i>
                Create
            </a>
        </div>
        <h1 class="text-light">Popular Movies</h1>
        <div class="row mt-4">
            <div class="row row-cols-1 row-cols-md-3 row-cols-xl-4 row-cols-xxl-4" id="data"></div>
            <div class="row g-4 mt-2">
                <div class="col-12 d-grid">
                    <button class="btn btn-primary" id="load"><i class="bi bi-arrow-bar-down me-2"></i></i>Load More</button>
                </div>
            </div>
        </div>
        <footer class="container-fluid text-center">
            <p>&#169; 202410101057-Muhammad Hidayatur Rahman</p>
        </footer>
    </div>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- pooper js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
        var page = 0;
        $(document).ready(function(){
            $("#load").click(function (){
                $(this).html("Loading...").attr("disabled", "disabled")
                $.post("film.php?mode="+page, function(response){
                    $.each(response, function (key,value){
                        $("#data").append("<div class='col d-flex justify-content-center mb-4'><div class='card'>" + 
                        "<img class='card-img-top' src='" + value.img +"'/>" +
                        "<div class='card-body'>" +
                        "<h5 class='card-title'>" + value.title + "</h5>" + 
                        "<p class='card-text'>Rating: " + value.rating + "</p>" +
                        "</div>" + 
                        "</div></div>");
                    });
                    page += 12;
                    $("#load").html("<i class='bi bi-arrow-bar-down me-2'></i>Load More").removeAttr("disabled")
                });
            }).trigger('click');
        });
    </script>
</body>
</html>