<?php
  include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icon/UWIKA.jpg">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TORTOisKURA Official Website</title>
    <!-- menyisipkan bootstrap -->
     <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">
<div class="jumbotron jumbotron-fluid">
    <form id='frmlogin' method='post' action=''>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1>Selamat datang di TORTOisKURA</h1>
                        <p>Bergabunglah bersama jutaan orang lainnya...</p>
                    </div>
                    <div class="col-md-4">
                        <a href="/login.php" class="btn btn-secondary">Masuk</a>
                        <a name='register' href="/kirim.php" class="btn btn-success">Daftar</a>
                    </div>
                </div>
            </div>
    </header>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img class="img img-responsive" src="icon/logo.png" />
                </div>
            </div>
        </div>
    </section>

    </form>
</body>
</html>
