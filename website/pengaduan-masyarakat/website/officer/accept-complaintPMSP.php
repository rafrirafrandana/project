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

            $post = $crypt->owl192_encode($_GET['post']);

            $data = mysqli_query($db, "SELECT * FROM pengaduan WHERE id_pengaduan='$post'");

            if($_SERVER['REQUEST_METHOD'] == "POST") {

                $id_tanggapan   = $crypt->owl192_encode(time() * time());
                $id_pengaduan   = $post;
                $tgl_tanggapan  = $crypt->owl128_encode(date("M d Y"));
                $isi            = $crypt->owl256_encode($_POST['isi']);
                $id_petugas     = $_SESSION['id_petugas'];

                mysqli_query($db, "INSERT INTO tanggapan VALUES('$id_tanggapan','$id_pengaduan','$tgl_tanggapan','$isi','$id_petugas')");

                $status         = $crypt->owl128_encode('Confirmed');
                mysqli_query($db, "UPDATE pengaduan SET status='$status' WHERE id_pengaduan='$post'");

                header("Location: complaint");

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
            .pmsp .a-head .a-head-content .a-head-content-text {

                color: #222;
                font-size: 23px;
                top: 50%;
                transform: translateY(-50%);
                position: relative;

            }
            @media screen and (min-width: 769px) {
                .pmsp .a-head .a-head-content .a-head-content-text {

                    color: #222;
                    font-size: 23px;
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
            .pmsp .a-frame .a-frame-form .a-frame-form-text {

                color: #222;
                font-size: 30px;
                margin-bottom: 30px;

            }
            @media screen and (min-width: 769px) {
                .pmsp .a-frame .a-frame-form .a-frame-form-text {

                    color: #222;
                    font-size: 30px;
                    margin-bottom: 30px;

                }
            }
            .pmsp .a-frame .a-frame-form .a-frame-form-input {

                background-color: #edf4f0;
                width: 100%;
                height: 100px;
                border-bottom: 1px solid #222;

            }
            @media screen and (min-width: 769px) {
                .pmsp .a-frame .a-frame-form .a-frame-form-input {

                    background-color: #edf4f0;
                    width: 100%;
                    height: 100px;
                    border-bottom: 1px solid #222;

                }
            }
            .pmsp .a-frame .a-frame-form .a-frame-form-input .a-frame-form-input-action {

                background: none;
                color: #222;
                font-size: 15px;
                width: 100%;
                height: 100%;

            }
            @media screen and (min-width: 769px) {
                .pmsp .a-frame .a-frame-form .a-frame-form-input .a-frame-form-input-action {
                    
                    background: none;
                    color: #222;
                    font-size: 15px;
                    width: 100%;
                    height: 100%;

                }
            }
            .pmsp .a-frame .a-frame-form .a-frame-form-media {

                background-color: #edf4f0;
                width: 100%;
                border-bottom: 1px solid #222;
                margin-top: 25px;
                padding: 10px 0px;

            }
            @media screen and (min-width: 769px) {
                .pmsp .a-frame .a-frame-form .a-frame-form-media {

                    background-color: #edf4f0;
                    width: 100%;
                    border-bottom: 1px solid #222;
                    margin-top: 25px;
                    padding: 10px 0px;

                }
            }
            .pmsp .a-frame .a-frame-form .a-frame-form-button {

                background-color: #222;
                color: #fff;
                font-size: 15px;
                width: 100%;
                height: 40px;
                border-radius: 10px;
                margin-top: 25px;
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
                    margin-top: 25px;
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
                        <h1 class="a-head-content-text">Pengaduan Masyarakat</h1>
                    </div>
                    <div class="a-head-content a-head-right">
                        <div class="a-head-content-action" onclick="window.location = 'complaint';">
                            <p class="a-head-content-action-text">< Kembali</p>
                        </div>
                    </div>
                </div>
                <div class="a-frame">
                    <div class="a-frame-form">
                        <h1 class="a-frame-form-text">Ajukan Balasan</h1>
                        <form method="post" enctype="multipart/form-data">

                            <?php 

                                if( mysqli_num_rows($data) ) {
                                    while( $row = mysqli_fetch_assoc($data) ) {

                                        $isi_pengaduan = $crypt->owl256_decode($row['isi_laporan']);
                                        $foto = $row['foto'];

                            ?>
                            <div class="a-frame-form-input">
                                <textarea class="a-frame-form-input-action" placeholder="<?= $isi_pengaduan; ?>" disabled></textarea>
                            </div>

                            <div class="a-frame-form-media">
                                <div class="a-frame-form-media-action" style="background: url('../.app/base/DISK-D/src/<?= $foto; ?>') no-repeat; background-size: 100%; width: 150px; height: 150px; border: 1px solid #222; border-radius: 10px;"></div>
                            </div>
                            <?php

                                    }
                                }

                            ?>

                            <br>

                            <div class="a-frame-form-input">
                                <textarea class="a-frame-form-input-action" name="isi" placeholder="Ketik balasan anda ..." autofocus autocomplete="off" required></textarea>
                            </div>
                            
                            <button class="a-frame-form-button" type="submit" name="submit">Kirim</button>

                        </form>
                    </div>
                </div>
            </div>
        </center>
    </body>
</html>
