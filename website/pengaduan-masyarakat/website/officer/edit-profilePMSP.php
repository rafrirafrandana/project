<html translate="off" <?php require '../.app/manifest/_manifest_.php'; ?>>
    <head>
        <?php

            session_start();
            date_default_timezone_set("Asia/Jakarta");

            if(
                
                $_SESSION['id_petugas'] && 
                $_SESSION['nama_petugas'] &&
                $_SESSION['username'] &&
                $_SESSION['password'] &&
                $_SESSION['telp'] &&
                $_SESSION['level']

            ) {

            } else {

                $app->go($setup['main-page-admin']);

            }

            $id_petugas = $_SESSION['id_petugas'];

            $data = mysqli_query($db, "SELECT * FROM petugas WHERE id_petugas='$id_petugas'");

            if($_SERVER['REQUEST_METHOD'] == "POST") {

                $nama_petugas = $crypt->owl128_encode($_POST['nama_petugas']);
                $telp = $crypt->owl192_encode($_POST['telp']);

                $id_petugas_get = $_SESSION['id_petugas'];

                mysqli_query($db, "UPDATE petugas SET nama_petugas='$nama_petugas', telp='$telp' WHERE id_petugas='$id_petugas_get'");

                $app->go("alert/update");

            }

        ?>
        <title>Pengaduan Masyarakat</title>
        <meta name="description" content="Ajukan pengaduan anda di Pengaduan Masyarakat"/>
        <meta name="keywords" content="Pengaduan Masyarakat"/>
        <meta name="authors" content="Kementerian Kesehatan Republik Indonesia"/>
        <meta name="viewport" content="width=device=width, initial-scale=1, maximum-scale=1.0, user-scalable=0"/>
        <meta charset="utf-8">

        <link rel="shortcut icon" type="image/png" href="../.app/base/DISK-C/src/shortcuticon.png"/>
        <link rel="stylesheet" type="text/css" href="../.app/assets/assets.css"/>
        <style type="text/css">
            .pmsp {

                background-color: #fff;
                color: #222;
                width: 100%;
                height: 100%;
                overflow: auto;
                overflow-y: scroll;
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
            .pmsp .a-head {

                width: 90%;
                height: 20%;
                position: relative;   

            }
            @media screen and (min-width: 769px) {
                .pmsp .a-head {

                    width: 90%;
                    height: 15%;
                    position: relative;

                }
            }
            .pmsp .a-head .a-head-content {

                display: inline-block;

            }
            @media screen and (min-width: 769px) {
                .pmsp .a-head .a-head-content {

                    display: inline-block;

                }
            }
            .pmsp .a-head .a-head-left {

                height: 100%;
                float: left;

            }
            @media screen and (min-width: 769px) {
                .pmsp .a-head .a-head-left {

                    height: 100%;
                    float: left;

                }
            }
            .pmsp .a-head .a-head-right {

                height: 100%;
                float: right;

            }
            @media screen and (min-width: 769px) {
                .pmsp .a-head .a-head-right {

                    height: 100%;
                    float: right;

                }
            }
            .pmsp .a-head .a-head-content .a-head-content-logo {

                background: url('../.app/base/DISK-C/src/logo.png') no-repeat;
                background-size: 100%;
                width: 82px;
                height: 90px;
                top: 50%;
                transform: translateY(-50%);
                position: relative;

            }
            @media screen and (min-width: 769px) {
                .pmsp .a-head .a-head-content .a-head-content-logo {

                    background: url('../.app/base/DISK-C/src/logo.png') no-repeat;
                    background-size: 100%;
                    width: 82px;
                    height: 90px;
                    top: 50%;
                    transform: translateY(-50%);
                    position: relative;

                }
            }
            .pmsp .a-head .a-head-content .a-head-content-action {

                background-color: #edf4f0;
                box-shadow: 8px 8px 0px #222;
                border: 1px solid #222;
                border-radius: 10px;
                padding: 10px;
                top: 50%;
                transform: translateY(-50%);
                position: relative;
                transition: 0.2s;
                cursor: default;

            }
            @media screen and (min-width: 769px) {
                .pmsp .a-head .a-head-content .a-head-content-action {

                    background-color: #edf4f0;
                    box-shadow: 8px 8px 0px #222;
                    border: 1px solid #222;
                    border-radius: 10px;
                    padding: 10px;
                    top: 50%;
                    transform: translateY(-50%);
                    position: relative;
                    transition: 0.2s;
                    cursor: pointer;

                }
            }
            .pmsp .a-head .a-head-content .a-head-content-action:hover {

                background-color: #edf4f0;
                box-shadow: 4px 4px 0px #222;
                border: 1px solid #222;
                border-radius: 10px;
                padding: 10px;
                top: 50%;
                transform: translateY(-50%);
                position: relative;
                transition: 0.2s;
                cursor: default;

            }
            @media screen and (min-width: 769px) {
                .pmsp .a-head .a-head-content .a-head-content-action:hover {

                    background-color: #edf4f0;
                    box-shadow: 4px 4px 0px #222;
                    border: 1px solid #222;
                    border-radius: 10px;
                    padding: 10px;
                    top: 50%;
                    transform: translateY(-50%);
                    position: relative;
                    transition: 0.2s;
                    cursor: pointer;

                }
            }
            .pmsp .a-head .a-head-content .a-head-content-action .a-head-content-action-text {

                color: #222;
                font-size: 17px;

            }
            @media screen and (min-width: 769px) {
                .pmsp .a-head .a-head-content .a-head-content-action .a-head-content-action-text {

                    color: #222;
                    font-size: 17px;

                }
            }
            .pmsp .a-frame {

                width: 90%;
                position: relative;   

            }
            @media screen and (min-width: 769px) {
                .pmsp .a-frame {

                    width: 90%;
                    position: relative;

                }
            }
            .pmsp .a-frame .a-frame-form {

                background-color: #edf4f0;
                color: #222;
                box-shadow: 10px 15px 0px #222;
                width: 96%;
                border: 1px solid #222;
                border-radius: 10px;
                padding: 5% 2% 5% 2%;

            }
            @media screen and (min-width: 769px) {
                .pmsp .a-frame .a-frame-form {

                    background-color: #edf4f0;
                    color: #222;
                    box-shadow: 10px 15px 0px #222;
                    width: 28%;
                    border: 1px solid #222;
                    border-radius: 10px;
                    padding: 2% 1% 2% 1%;

                }
            }
            .pmsp .a-frame .a-frame-form .a-frame-form-input {

                width: 100%;
                height: 40px;
                border-bottom: 1px solid #222;
                margin-top: 10px;

            }
            @media screen and (min-width: 769px) {
                .pmsp .a-frame .a-frame-form .a-frame-form-input {

                    width: 100%;
                    height: 40px;
                    border-bottom: 1px solid #222;
                    margin-top: 10px;

                }
            }
            .pmsp .a-frame .a-frame-form .a-frame-form-input .a-frame-form-input-action {

                background: none;
                font-size: 15px;
                width: 100%;
                height: 100%;

            }
            @media screen and (min-width: 769px) {
                .pmsp .a-frame .a-frame-form .a-frame-form-input .a-frame-form-input-action {

                    background: none;
                    font-size: 15px;
                    width: 100%;
                    height: 100%;

                }
            }
            .pmsp .a-frame .a-frame-form .a-frame-form-alert {

                color: #222;
                text-align: left;
                font-size: 15px;
                margin-top: 30px;

            }
            @media screen and (min-width: 769px) {
                .pmsp .a-frame .a-frame-form .a-frame-form-alert {

                    color: #222;
                    text-align: left;
                    font-size: 15px;
                    margin-top: 30px;

                }
            }
            .pmsp .a-frame .a-frame-form .a-frame-form-button {

                background-color: #222;
                color: #fff;
                font-size: 15px;
                width: 100%;
                height: 40px;
                border-radius: 10px;
                margin-top: 30px;
                cursor: default;

            }
            @media screen and (min-width: 769px) {
                .pmsp .a-frame .a-frame-form .a-frame-form-button {

                    background-color: #222;
                    color: #fff;
                    font-size: 15px;
                    width: 100%;
                    height: 40px;
                    border-radius: 10px;
                    margin-top: 20px;
                    cursor: pointer;

                }
            }
        </style>
    </head>
    <body>
        <center>
            <div class="pmsp">
                <div class="a-head">
                    <div class="a-head-content a-head-left">
                        <div class="a-head-content-logo"></div>
                    </div>
                    <div class="a-head-content a-head-right">
                        <div class="a-head-content-action" onclick="window.location = 'profile';">
                            <p class="a-head-content-action-text">< Kembali</p>
                        </div>
                    </div>
                </div>
                <div class="a-frame">
                    <div class="a-frame-form">
                        <form action="" method="post" enctype="multipart/form-data">
                            
                            <?php
                                
                                if( mysqli_num_rows($data) ) {
                                    while($row = mysqli_fetch_assoc($data) ) {

                                        $nama_petugas = $crypt->owl128_decode($row['nama_petugas']);
                                        $telp = $crypt->owl192_decode($row['telp']);

                            ?>

                            <div class="a-frame-form-input">
                                <input class="a-frame-form-input-action" type="text" name="nama_petugas" placeholder="Nama Lengkap" value="<?= $nama_petugas; ?>" autofocus autocomplete="off">    
                            </div>

                            <div class="a-frame-form-input">
                                <input class="a-frame-form-input-action" type="number" name="telp" placeholder="Nomor Telepon" value="<?= $telp; ?>" autofocus autocomplete="off">    
                            </div>

                            <?php

                                    }
                                }

                            ?>
                            
                            <p class="a-frame-form-alert">Setelah anda klik simpan, anda akan diminta masuk akun lagi!</p>

                            <button class="a-frame-form-button" type="submit" name="submit">Simpan</button>

                        </form>
                    </div>
                </div>
            </div>
        </center>
    </body>
</html>