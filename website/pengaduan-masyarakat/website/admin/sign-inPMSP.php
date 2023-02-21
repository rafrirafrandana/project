<html translate="off" <?php require '../.app/manifest/_manifest_.php'; ?>>
    <head>
        <?php

            session_start();            

            if($_SERVER['REQUEST_METHOD'] == "POST") {

                $username   = $_POST['username'];
                $password   = $_POST['password'];

                $data_username  = $crypt->owl256_encode($username);
                $data_password  = $crypt->owl256_encode($password);

                $data = mysqli_query($db, "SELECT * FROM petugas WHERE username='$data_username' AND password='$data_password'");

                $row = mysqli_fetch_array($data);

                if( mysqli_num_rows($data) ) {

                    $_SESSION['id_petugas']     = $row['id_petugas'];
                    $_SESSION['nama_petugas']   = $row['nama_petugas'];
                    $_SESSION['username']       = $row['username'];
                    $_SESSION['password']       = $row['password'];
                    $_SESSION['telp']           = $row['telp'];

                    if($row['level'] == 'S0uJftb0OhIZjlYZaWOjmw==') {

                        $_SESSION['level']      = $row['level'];

                        $app->go('home');

                    }

                }


            }
            
        ?>
        <title>Pengaduan Masyarakat</title>
        <meta name="description" content="Ajukan pengaduan anda di Pengaduan Masyarakat"/>
        <meta name="keywords" content="Pengaduan Masyarakat"/>
        <meta name="authors" content="Republik Indonesia"/>
        <meta name="viewport" content="width=device=width, initial-scale=1, maximum-scale=1.0, user-scalable=0"/>
        <meta charset="utf-8"/>

        <link rel="shortcut icon" type="image/png" href="../.app/base/DISK-C/src/shortcuticon.png"/>
        <link rel="stylesheet" type="text/css" href="../.app/assets/assets.css"/>
        <style type="text/css">
            .pmsp {

                background-color: #fff;
                color: #222;
                width: 100%;
                height: 100%;
                overflow: none;
                overflow-y: none;
                overflow-x: none;

            }
            @media screen and (min-width: 769px) {
                .pmsp {

                    background-color: #fff;
                    color: #222;
                    width: 100%;
                    height: 100%;
                    overflow: none;
                    overflow-y: none;
                    overflow-x: none;

                }
            }
            .pmsp .form {

                background-color: #edf4f0;
                color: #222;
                box-shadow: 10px 15px 0px #222;
                width: 86%;
                border: 1px solid #222;
                border-radius: 10px;
                padding: 5% 2% 5% 2%;
                top: 50%;
                transform: translateY(-50%);
                position: relative;

            }
            @media screen and (min-width: 769px) {
                .pmsp .form {

                    background-color: #edf4f0;
                    color: #222;
                    box-shadow: 10px 15px 0px #222;
                    width: 28%;
                    border: 1px solid #222;
                    border-radius: 10px;
                    padding: 2% 1% 2% 1%;
                    top: 50%;
                    transform: translateY(-50%);
                    position: relative;

                } 
            }
            .pmsp .form .form-text1 {

                color: #222;
                font-size: 32px;
                margin: 15px 0px 0px 0px;

            }
            @media screen and (min-width: 769px) {
                .pmsp .form .form-text1 {

                    color: #222;
                    font-size: 32px;
                    margin: 15px 0px 0px 0px;

                }
            }
            .pmsp .form .form-text2 {

                color: #222;
                font-size: 32px;
                margin: 20px 0px 0px 0px;

            }
            @media screen and (min-width: 769px) {
                .pmsp .form .form-text2 {

                    color: #222;
                    font-size: 32px;
                    margin: 20px 0px 0px 0px;

                }
            }
            .pmsp .form .form-input {

                background-color: #edf4f0;
                width: 100%;
                height: 40px;
                border-bottom: 1px solid #222;
                margin: 15px 0px 0px 0px;

            }
            @media screen and (min-width: 769px) {
                .pmsp .form .form-input {

                    background-color: #edf4f0;
                    width: 100%;
                    height: 40px;
                    border-bottom: 1px solid #222;
                    margin: 15px 0px 0px 0px;

                }
            }
            .pmsp .form .form-input .form-input-action {

                background: none;
                font-size: 15px;
                width: 100%;
                height: 100%;

            }
            @media screen and (min-width: 769px) {
                .pmsp .form .form-input .form-input-action {

                    background: none;
                    font-size: 15px;
                    width: 100%;
                    height: 100%;

                }
            }
            .pmsp .form .form-lp {

                color: #d15355;
                text-align: left;
                font-size: 15px;
                margin: 20px 0px 0px 0px;
                cursor: default;

            }
            @media screen and (min-width: 769px) {
                .pmsp .form .form-lp {

                    color: #d15355;
                    text-align: left;
                    font-size: 15px;
                    margin: 20px 0px 0px 0px;
                    cursor: pointer;

                }
            }
            .pmsp .form .form-button {

                background-color: #222;
                color: #fff;
                font-size: 15px;
                width: 100%;
                height: 40px;
                border-radius: 10px;
                margin: 20px 0px 0px 0px;
                cursor: default;

            }
            @media screen and (min-width: 769px) {
                .pmsp .form .form-button {

                    background-color: #222;
                    color: #fff;
                    font-size: 15px;
                    width: 100%;
                    height: 40px;
                    border-radius: 10px;
                    margin: 20px 0px 0px 0px;
                    cursor: pointer;

                }
            }
            .pmsp .form .form-signup {

                color: #53add1;
                font-size: 16px;
                margin: 20px 0px 0px 0px;
                cursor: default;

            }
            @media screen and (min-width: 769px) {
                .pmsp .form .form-signup {

                    color: #53add1;
                    font-size: 16px;
                    margin: 20px 0px 0px 0px;
                    cursor: pointer;

                }
            }
        </style>
    </head>
    <body>    
        <center>
            <div class="pmsp">
                <div class="form">
                    <h1 class="form-text1">ADMIN</h1>
                    <p class="form-text2">Masuk</p>
                    <form method="post" enctype="multipart/form-data">

                        <div class="form-input">
                            <input class="form-input-action" type="text" name="username" placeholder="Username" autocomplete="off" autofocus required/>
                        </div>

                        <div class="form-input">
                            <input class="form-input-action" type="password" name="password" placeholder="Password" autocomplete="off" autofocus required/>
                        </div>

                        <p class="form-lp" onclick="window.location = 'forgot-password';">Lupa password?</p>

                        <button class="form-button" type="submit" name="submit">Masuk</button>

                        <p class="form-signup" onclick="window.location = 'sign-up';">Belum punya akun? Daftar</p>

                    </form>
                </div>
            </div>
        </center>
    </body>
</html>
