<?php
    // Nama : Muhammad Hidayatur Rahman
    // NIM  : 202410101057
    // Kelas: PWEB A
    $title_page = 'BeritaTerbaru<span>!<span>';

    $news = array(
        array(
            'Fakarich Guru Trading Indra Kenz Jadi Tersangka Usai Perdana Diperiksa', 
            'Kedatangan Fakarich itu usai dirinya diultimatum Polri bakal dijemput paksa karena mangkir dua kali. Ultimatum Polri itu awalnya disampaikan sebelum panggilan kedua terhadap Fakarich. Dia sedianya diperiksa oleh polisi pada Kamis (31/3). Akan membawa paksa. Karena sudah 2 kali dipanggil tidak hadir, berikutnya dengan perintah membawa untuk dihadirkan penyidik, ujar Kabag Penum Divisi Humas Polri Kombes Gatot Repli Handoko kepada wartawan, Rabu (30/3/2022).', 
            'img\gambar1.jpeg'),

        array(
            'IDI Buka Peluang Mediasi dengan dr Terawan soal Pemecatan', 
            'Ketua Umum Ikatan Dokter Indonesia (IDI) Adib Khumaidi mengatakan keputusan Muktamar ke -31 yang salah satunya memecat dr Terawan tetap dijalankan. Meski begitu, IDI nantinya akan membuka peluang mediasi sekaligus memberikan kesempatan dr Terawan untuk melakukan pembelaan.
            Iya jadi secara internal ketetapan muktamar tetap kita akan jalankan, tapi kemudian kita akan membuka forum untuk kemudian melakukan mediasi sekaligus forum pembelaan yang itu dikhususkan untuk itu, kata Adib kepada wartawan, di Kompleks Parlemen, Senin (4/4/2022).', 
            'img\gambar2.jpeg'),

        array(
            'Pemerintah Arab Saudi Siap Terima Jamaah Umrah Tanpa Batasan Kuota', 
            'Kementerian Haji dan Umrah Arab Saudi telah mengeluarkan 23 juta izin Umrah sejak awal musim. Hal ini dikonfirmasi oleh Juru Bicara Dinas Haji dan Umrah, Hisyam Al-Saeed.Al-Saeed mengatakan bahwa warga, penduduk, dan pengunjung yang datang dari luar Kerajaan telah mendapat manfaat dari layanan penerbitan izin Umrah selama Bulan Suci Ramadan.', 
            'img\3929627441.jpg'),

        array(
            'Spek Kapal Tanker Pertamina Prime, Bisa Angkut 2 Juta Barel Minyak Mentah', 
            'Kapal tanker Pertamina Prime diblokir oleh sekelompok aktivis Greenpeace. Hal itu dilakukan Greenpeace untuk memblokir pengiriman minyak Rusia. Adapun beroperasinya kapal tanker Pertamina Prime diharapkan dapat dioptimalisasi untuk memenuhi kebutuhan feedstock kilang di Indonesia sekaligus mengamankan pasokan kebutuhan minyak mentah ke kilang Pertamina. Pasalnya, Very Large Crude Carrier (VLCC) Pertamina Prime memiliki kapasitas angkut 2 juta barel.', 
            'img\pertamina-prime.png'),
            
        array(
            'Ratusan Umat Muslim Tarawih di Times Square New York', 
            'Times Square identik sebagai spot wisata populer di New York. Hanya saja di hari perdana di bulan Ramadan, ratusan umat muslim shalat tarawih di sana.
            Dikutip detikTravel dari CBS News, Selasa (5/4/2022), ratusan orang berkumpul untuk melakukan shalat tarawih perdana di Times Square, Amerika Serikat (AS) pada Sabtu (2/4) sebagai penanda dimulainya bulan suci Ramadhan.', 
            'img\salat-tarawih-new-york.jpg')
    );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>1057 | Tugas Index Page</title>
    <style>
        span {
            color : red;
        }
        .card {
            transition: transform .9s;
        }
        .card:hover {
            transform: scale(1.02);
        }
    </style>
</head>
<body style="height:auto">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm fixed-top">
        <h1 class="nav-item mx-3" style="color:white;">
            <?php echo $title_page?>
        </h1>
    </nav>
    <section>
        <div class="container p-2 mt-5 pt-5">
            <div class="identity text-center">
                <p> Muhammad Hidayatur Rahman - 202410101057</p>
            </div>
            <?php foreach($news as $nw) : ?>
                <div class="row justify-content-center mx-2">
                    <div class="card mb-3 g-0 mx-2 p-2" style="max-width: 1080px;">
                        <div class="row g-0">
                            <div class="col-12 col-md-5 col-sm-5">
                                <img src="<?= $nw[2] ?>" class="img-fluid rounded-center" alt="1">
                            </div>
                            <div class="col-12 col-md-7 mx-7">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $nw[0] ?></h5>
                                    <p class="card-text"><?= $nw[1] ?></p>
                                    <a class="card-text" href="https://news.detik.com/"><small class="text-muted">Sumber : detik.com</small></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <footer class="container-fluid text-center py-2 " style="background-color:#212529;">
        <p style="color:white;">&#169; 202410101057 - Muhammad Hidayatur Rahman <a href="https://news.detik.com/">Sc : detik.com</a></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>