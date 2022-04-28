<!-- Logic PHP untuk Sorting -->
<?php
    require_once ("./db_config.php");

    if (isset($_POST['ASC'])) {
        $sql  ="SELECT * FROM uts ORDER BY animo ASC";
        $result = $db->query($sql); 
    }
    
    elseif (isset($_POST['DESC'])) {
        $sql ="SELECT * FROM uts ORDER BY animo DESC";
        $result = $db->query($sql); 
    }
    else {
        $sql = "SELECT * FROM uts";
        $result = $db->query($sql); 
    }  

    $datas = array();
    while ($row = $result->fetch_assoc()){
        $datas[] = $row;
    }

?>

<!-- Content -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>1057 | UTS PWEB</title>
</head>
<body>
    <div class="container px-4">
        <div class="card mt-3">
            <div class="card-header text-start">
                <strong>Data Animo Mahasiswa UNEJ</strong> 
            </div>
            <div class="card-body">
                <a href="./createData.php" class="btn btn-success mb-3">Tambah Data Baru</a>
                <form action="index.php" method="post">
                    <div class="text-end mb-2" style="margin-top:-55px;">
                        <p>Urutkan berdasarkan Animo: </p>
                        <input class="btn btn-secondary" type="submit" name="ASC" value="Ascending">
                        <input class="btn btn-secondary" type="submit" name="DESC" value="Descending"></td>
                    </div>
                    <table class="table table-light table-striped justify-content-center text-center">
                        <thead>
                            <tr>
                            <th>#</th>
                            <th>Nama Fakultas</th>
                            <th>Animo</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $i = 1;
                        if (count($datas) > 0) :
                            foreach ($datas as $data) : ?>
                            <tr>
                                <td><?= $i ?></td>
                                <td><?= $data['fakultas'] ?></td>
                                <td><?= $data['animo'] ?></td>
                                <td class='text-center'>
                                    <a href="editData.php?id=<?=$data['id']?>" class="btn btn-warning mx-2">Edit</a>
                                    <a type="submit" data-id="<?= $data['id']; ?>" fakultas="<?= $data['fakultas']; ?>" class='delete btn btn-danger'>Delete</a>
                                </td>
                                <?php $i++; ?>
                            </tr>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <td>Tidak ada data</td> 
                            <td>Tidak ada data</td> 
                            <td>Tidak ada data</td> 
                            <td>Tidak ada data</td> 
                        <?php endif; ?> 
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
    <footer class="container-fluid text-center my-3">
        <p>&#169; 202410101057-Muhammad Hidayatur Rahman</p>
    </footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script 
    src="https://code.jquery.com/jquery-3.6.0.slim.js"  integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY="
    crossorigin="anonymous">
</script>
<!-- Allert -->
<script>
    $('.delete').click(function(){
        var fakultas = $(this).attr('fakultas');
        var idData = $(this).attr('data-id');
        Swal.fire({
            title: 'Yakin',
            text: "Ingin Menghapus Data dari Fakultas " + fakultas + "?",
            icon: 'warning',
            showConfirmButton: true,
            showCancelButton: true,
            cancelButtonColor: '#c4c4c4',
            confirmButtonColor: '#dc3545',
            confirmButtonText: 'Yakin',
            cancelButtonText: 'Batal'
            }).then((result) => {
            if (result.isConfirmed) {
                window.location = "deleteData.php?id="+idData;
            }
        })
    })
</script>
</html>