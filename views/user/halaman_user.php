<!-- MUHAMMAD IVAN CHRIANA - 20210120065 - TUGAS PERTEMUAN 8 -->

<?php 
class dashboard{
  function __construct(){
    include"menu.php";
  }

}
$halaman_utama = new dashboard;

include("../../model/database.php");

$db = new database();

$data_barang = $db->data_barang();

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="../../css/style.css">
    <title>Digital Toko</title>
</head>

<body>
    <div>
        <div class="Text-berjalan">
            <h1><span class="auto-type"></span></h1>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="container text-center">
            <h3>Kategori Produk</h3>

            <div class="row mt-5">
                <div class="col-md-4 mb-3">
                    <div class="highlighted-kategori kategori-motor" id="highlighted-kategori kategori-motor">
                        <img src="../administrator/Dokumen/5160-Honda U-Go.jpg" alt="">
                        <h4 class="mt-2">Motor</h4>
                    </div>

                </div>
                <div class="col-md-4 mb-3">
                    <div class="highlighted-kategori kategori-makanan" id="highlighted-kategori kategori-makanan">
                        <img src="../administrator/Dokumen/2500-nugget.jpg" alt="">
                        <h4 class="mt-2">Makanan</h4>
                    </div>

                </div>
                <div class="col-md-4 mb-3">
                    <div class="highlighted-kategori" id="highlighted-kategori">
                        <img src="../administrator/Dokumen/toyota.jpg" alt="">
                        <h4 class="mt-2">Mobil</h4>
                    </div>

                </div>
            </div>
        </div>
    </div>



</body>

<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
var typed = new Typed(".auto-type", {
    strings: ["Selamat Datang Di Digital Toko"],
    typeSpeed: 60,
    backSpeed: 60,
    loop: true
});
</script>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>