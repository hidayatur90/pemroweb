<?php
require_once("db_config.php");
 
if(isset($_POST['edit']))
{	
	$id = $_POST['id'];
	$fakultas = $_POST['fakultas'];
	$animo = $_POST['animo'];
		
	$result = mysqli_query($db, "UPDATE uts SET fakultas='$fakultas',animo='$animo' WHERE id=$id");
	
    echo "
    <script>
        alert('Data Berhasil diedit');
        document.location.href = 'index.php';
    </script>";
}
?>

<?php
$id = $_GET['id'];
 
$result = mysqli_query($db, "SELECT * FROM uts WHERE id=$id");
 
while($row = mysqli_fetch_array($result))
{
	$fakultas = $row['fakultas'];
	$animo = $row['animo'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>UTS | Update Data</title>
</head>
<body>
    
    <div class="container px-4 py-4">
        <div class="header">
            <h4><strong>Edit Data Animo Mahasiswa</strong></h4>
        </div>
        <hr>
        <div class="form-edit">
            <form method="post" action="editData.php">

                <!-- Nama Fakultas -->
                <div class="row mb-3">
                    <label for="fakultas" class="col-form-label col-sm-4 col-md-3 col-xl-2"><strong>Nama Fakultas</strong></label>
                    <div class="col-sm-8 col-md-9 col-xl-10">
                        <input type="text" id="fakultas" class="form-control" name="fakultas" placeholder="Nama Fakultas" value="<?= $fakultas; ?>" autocomplete="off" required oninvalid="this.setCustomValidity('Nama Fakultas tidak boleh Kosong')" oninput="this.setCustomValidity('')"/>
                    </div>
                </div>

                <!-- Jumlah Animo -->
                <div class="row mb-3">
                    <label for="animo" class="col-form-label col-sm-4 col-md-3 col-xl-2"><strong>Jumlah Animo</strong></label>
                    <div class="col-sm-8 col-md-9 col-xl-10">
                        <input type="number" class="form-control" min="0" name="animo" id="animo" placeholder="Jumlah Animo Mahasiswa" value="<?= $animo; ?>" autocomplete="off" required oninvalid="this.setCustomValidity('Jumlah Animo harus angka')" oninput="this.setCustomValidity('')"/>
                    </div>
                </div>

                <div class="row mb-3 justify-content-end mx-3 my-4">
                    <div class="col-sm-8 col-md-9 col-xl-10" style="text-align:end;">
                        <input type="hidden" name="id" value="<?= $_GET['id'];?>">
                        <input type="submit" name="edit" class="btn btn-success mx-3" value="Edit">
                        <a type="button" class="btn btn-secondary border" href="index.php">
                            Kembali
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>