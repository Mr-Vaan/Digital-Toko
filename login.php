<!-- INI HALAMAN LOGIN -->
<?php 

include 'model/login_model.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="../style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <title>Halaman | LOGIN</title>
</head>

<body>
    <div class="row justify-content-center align-items-center ">
        <div class="col-xl-6 col-lg-6 col-md-6">
            <div class="card shadow-sm my-5">
                <div class="card-body p-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php 
                                if(isset($_GET['pesan'])){
                                    if($_GET['pesan'] == "gagal"){
                                        echo "<div class='alert alert-danger alert-dismissible bg-danger text-white border-0 fade show' role='alert'>
                                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                                <span aria-hidden='true'>
                                                    &times;
                                                </span>
                                            </button>
                                            <strong>Login Gagal!</strong> Username atau Password Salah.
                                        </div>";
                                    } 
                                }
                            ?>

                            <form action="<?php echo"process/proses_login.php?aksi=login" ?>" method="post" class="">
                                <div class="text-center">
                                    <h3 class="mb-4">Halaman | LOGIN</h3>
                                </div>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" name="username" id="username"
                                        placeholder="Masukkan Username">
                                </div>
                                <br><br>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" id="password"
                                        placeholder="Masukkan Password">
                                </div>
                                <br>
                                <button type="submit" class="btn btn-dark text-white" value="Sign In">Login</button>
                                <button class="btn btn-dark text-white">Kembali</button>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>