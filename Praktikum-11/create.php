<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Create New Film</title>
    <style>
        body {
            background-color: black;
            background-image: url("assets/netflix.jpg");
        }  
    </style>
</head>
<body>
    <div class="container my-4 py-2" style="background-color:rgba(245, 245, 245, 0.8); border-radius: 5px;">
        <div class="header">
            <h1 class="h2 mb-3">
                <i class="bi bi-plus-circle mx-0"></i>
                Create New Film
            </h1>
        </div>

        <form method="POST" action="film.php">
            <!-- Thumbnail-->
            <!-- <div class="row mb-3">
                <label for="thumbnail" class="col-form-label col-sm-4 col-md-3 col-xl-2">Thumbnail</label>
                <div class="col-sm-8 col-md-9 col-xl-10">
                  <input type="file" class="form-control" name="thumbnail" id="thumbnail" placeholder="Thumbnail"/> 
                </div>
            </div> -->

            <!-- Title -->
            <div class="row mb-3">
                <label for="title" class="col-form-label col-sm-4 col-md-3 col-xl-2">Title *</label>
                <div class="col-sm-8 col-md-9 col-xl-10">
                    <input type="text" class="form-control" name="title" id="title" placeholder="Title" required />
                </div>
            </div>

            <!-- Description -->
            <div class="row mb-3">
                <label for="description" class="col-form-label col-sm-4 col-md-3 col-xl-2">Description</label>
                <div class="col-sm-8 col-md-9 col-xl-10">
                    <textarea type="textarea" class="form-control" name="description" id="description" rows="2" placeholder="Description of movie"></textarea>
                </div>
            </div>

            <!-- Release Year -->
            <div class="row mb-3">
                <label for="release_year" class="col-form-label col-sm-4 col-md-3 col-xl-2">Release Year</label>
                <div class="col-sm-8 col-md-9 col-xl-10">
                    <input type="number" class="form-control" name="release_year" id="release_year" placeholder="Release Year"/>
                </div>
            </div>

            <!-- Language -->
            <div class="row mb-3">
                <label for="language_id" class="col-form-label col-sm-4 col-md-3 col-xl-2">Language *</label>
                <div class="col-sm-8 col-md-9 col-xl-10">
                    <select class="form-select" aria-label="Default select example" name="language_id" id="language_id" aria-placeholder="Language" required>
                        <option selected>-</option>
                      </select>
                </div>
            </div>

            <!-- Original Language -->
            <div class="row mb-3">
                <label for="original_language_id" class="col-form-label col-sm-4 col-md-3 col-xl-2">Original Language</label>
                <div class="col-sm-8 col-md-9 col-xl-10">
                    <select class="form-select" aria-label="Default select example" name="original_language_id" id="original_language_id" aria-placeholder="Original Language">
                        <option selected>-</option>
                    </select>
                </div>
            </div>

            <!-- Rental Duration -->
            <div class="row mb-3">
                <label for="rental_duration" class="col-form-label col-sm-4 col-md-3 col-xl-2">Rental Duration *</label>
                <div class="col-sm-8 col-md-9 col-xl-10">
                    <div class="input-group">
                        <input type="number" class="form-control" name="rental_duration" id="rental_duration" placeholder="Rental Duration" required value="3">
                        <span class="input-group-text" id="basic-addon2">days</span>
                    </div>
                </div>
            </div>

            <!-- Rental Rate -->
            <div class="row mb-3">
                <label for="rental_rate" class="col-form-label col-sm-4 col-md-3 col-xl-2">Rental Rate *</label>
                <div class="col-sm-8 col-md-9 col-xl-10">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon2">$</span>
                        <input type="number" step="0.01" class="form-control" name="rental_rate" id="rental_rate" placeholder="Rental Rate" required value="4.99">
                    </div>
                </div>
            </div>
            
            <!-- Length -->
            <div class="row mb-3">
                <label for="length" class="col-form-label col-sm-4 col-md-3 col-xl-2">Length</label>
                <div class="col-sm-8 col-md-9 col-xl-10">
                    <div class="input-group">
                        <input type="number" class="form-control" name="length" id="length" placeholder="Length" value="86">
                        <span class="input-group-text" id="basic-addon2">minutes</span>
                    </div>
                </div>
            </div>
            
            <!-- Replacement Cost -->
            <div class="row mb-3">
                <label for="replacement_cost" class="col-form-label col-sm-4 col-md-3 col-xl-2">Replacement Cost *</label>
                <div class="col-sm-8 col-md-9 col-xl-10">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon2">$</span>
                        <input type="number" step="0.01" class="form-control" name="replacement_cost" id="replacement_cost" placeholder="Replacement Cost" required value="19.99">
                    </div>
                </div>
            </div>

            <!-- Rating -->
            <div class="row mb-3">
                <label for="rating" class="col-form-label col-sm-4 col-md-3 col-xl-2">Rating *</label>
                <div class="col-sm-8 col-md-9 col-xl-10">
                    <select class="form-select" id="rating" name="rating" required="required">
                        <option selected="selected" value="G">G</option>
                        <option value="PG">PG</option>
                        <option value="PG-13">PG-13</option>
                        <option value="R">R</option>
                        <option value="NC-17">NC-17</option>
                    </select>
                </div>
            </div>

            <!-- Special Features -->
            <div class="row mb-3">
                <label for="special_features" class="col-form-label col-sm-4 col-md-3 col-xl-2">Special Features</label>
                <div class="col-sm-8 col-md-9 col-xl-10">
                    <select class="form-select" id="special_features" name="special_features[]" multiple="multiple" size="4">
                        <option value="Trailers">Trailers</option>
                        <option value="Commentaries">Commentaries</option>
                        <option value="Deleted Scenes">Deleted Scenes</option>
                        <option value="Behind the Scenes">Behind the Scenes</option>
                    </select>
                </div>
            </div>

            <!-- Button -->
            <div class="row mb-3 justify-content-end">
                <div class="col-sm-8 col-md-9 col-xl-10">
                  <button type="submit" class="btn btn-primary">
                      <span class="bi bi-send-fill me-2"></span>
                      Submit
                    </button>
                  <a href="index.php" class="btn btn-light border">
                      <span class="bi bi-arrow-left me-2"></span>
                      Back
                    </a>
                </div>
            </div>
        </form>

    </div>
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- pooper js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $.get("language.php", function(response){
                $.each(response, function(key,value){
                    $("#language_id").append("<option value='" + value.language_id + "'>" + value.name + "</option>");
                    $("#original_language_id").append("<option value='" + value.language_id + "'>" + value.name + "</option>");
                });
            });
            $("form").submit(function(event){
                event.preventDefault();
                var data = $(this).serialize();
                $.post("film.php?mode=add", data, function(response){
                    alert("Data berhasil ditambahkan.");
                });
            });
        });
    </script>
</body>
</html>