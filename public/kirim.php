<?php
include "koneksi.php";


if(isset($_POST['register'])){

    ?>
    <!DOCTYPE html>
    <html>

   <body>
   <h2>Register Page</h2>

    <div class="container mt-5">
    <div class="row">
        <div class="col-md-6">

        <p>&larr; <a href="">Home</a></p>
        <br>
        <p>Sudah punya akun? <a href="/login.php">Login di sini</a></p>

        <form id="frmRegister" method="post" action="frmHandler.php">

            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" type="text" name="username" placeholder="Username">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" placeholder="Alamat Email">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Password">
            </div>

            <input type="submit" class="btn btn-success btn-block" name="register" value="Daftar">

        </form>
        </div>
    </div>
    </div>

   </body>
    </html>

    <?php
    // filter data yang diinputkan
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    // enkripsi password
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


    // menyiapkan query
    $sql = "INSERT INTO users (name, username, email, password)
            VALUES (:name, :username, :email, :password)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":name" => $name,
        ":username" => $username,
        ":password" => $password,
        ":email" => $email
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);
}else{$saved="";
};
    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved=""){header("location: login.php");};
?>
