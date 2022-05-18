<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Praktikum 10</title>
    <style>
        h1 {
            font-size: 2em;
        }
    </style>
</head>
<body>
    <div class="container my-2">
        <div class="float-end">
            <a href="" type="button" class="btn btn-primary">
                <i class="bi bi-plus-circle-fill white"></i>
                Create
            </a>
        </div>
        <h1>Popular Movies</h1>
        <div class="row mt-4">
            <div class="col-lg-8 col-xxl-9">
                <div class="row g-3" id="bikininData"></div>
            </div>
            <div class="row g-3 mt-2">
                <div class="col-12 d-grid">
                    <button class="btn btn-primary" id="load"><i class="bi bi-arrow-bar-down me-2"></i></i>Load More</button>
                </div>
            </div>
        </div>
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
                $.get("film.php?begin="+page, function(response){
                    $.each(response, function (key,value){
                        $("#bikininData").append("<div class='col-4'><div class='card'>" + 
                        "<img class='card-img-top' src='" + value.thumnail +"'/>" +
                        "<div class='card-body'>" +
                        "<h5 class='card-title'>" + value.title + "</h5>" + 
                        "<p class='card-text'>Rating: " + value.rating + "</p>" +
                        "</div>" +
                        "</div></div>");
                    });
                    page += 9;
                    $("#load").html("<i class='bi bi-arrow-bar-down me-2'></i>Load More").removeAttr("disabled")
                });
            }).trigger('click');
        });
    </script>
</body>
</html>