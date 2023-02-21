<html translate="off" <?php require '../.app/manifest/_manifest_.php'; ?>>
    <head>
        <?php

            session_start();

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

            $data = mysqli_query($db, "SELECT * FROM pengaduan");
            
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
            .pmsp .a-frame .a-frame-button:hover {

                background-color: #abdda6;
                color: #222;
                box-shadow: 4px 4px 0px #222;
                font-size: 15px;
                width: 100%;
                height: 40px;
                border: 1px solid #222;
                border-radius: 10px;
                margin-bottom: 30px;
                transition: 0.2s;
                cursor: default;

            }
            @media screen and (min-width: 769px) {
                .pmsp .a-frame .a-frame-button:hover {

                    background-color: #abdda6;
                    color: #222;
                    box-shadow: 4px 4px 0px #222;
                    font-size: 15px;
                    width: 100%;
                    height: 40px;
                    border: 1px solid #222;
                    border-radius: 10px;
                    margin-bottom: 30px;
                    transition: 0.2s;
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
                        <div class="a-head-content-action" onclick="window.location = 'home';">
                            <p class="a-head-content-action-text">< Kembali</p>
                        </div>
                    </div>
                </div>
                <div class="a-frame">
                    <table style="background-color: #fff; box-shadow: 10px 15px 0px #222; width: 100%; border: 1px solid #222; border-radius: 10px;">
                        <tr>
                            <th style="background-color: #edf4f0; color: #222; font-family: monospace; font-size: 18px; width: 15%; border: 1px solid #222; border-radius: 10px; padding: 10px;">Tanggal</th>
                            <th style="background-color: #edf4f0; color: #222; font-family: monospace; font-size: 18px; width: 50%; border: 1px solid #222; border-radius: 10px; padding: 10px;">Isi Laporan</th>
                            <th style="background-color: #edf4f0; color: #222; font-family: monospace; font-size: 18px; width: 100%; border: 1px solid #222; border-radius: 10px; padding: 10px;">Foto</th>
                            <th style="background-color: #edf4f0; color: #222; font-family: monospace; font-size: 18px; width: 100%; border: 1px solid #222; border-radius: 10px; padding: 10px;">Status</th>
                            <th style="background-color: #edf4f0; color: #222; font-family: monospace; font-size: 18px; width: 100%; border: 1px solid #222; border-radius: 10px; padding: 10px;">Aksi</th>
                        </tr>
                        <?php 

                            if( mysqli_num_rows($data) ) {
                                while( $row = mysqli_fetch_assoc($data) ) {

                                    $id_pengaduan = $crypt->owl192_decode($row['id_pengaduan']);
                                    $tgl_pengaduan = $crypt->owl128_decode($row['tgl_pengaduan']);
                                    $isi_laporan = $crypt->owl256_decode($row['isi_laporan']);
                                    $foto = $row['foto'];
                                    $status = $crypt->owl128_decode($row['status']);

                        ?>
                        <tr>
                            <td style="color: #222; font-family: monospace; font-size: 15px; width: 15%; border-bottom: 1px solid #222; border-radius: 10px; padding: 10px;"><?= $tgl_pengaduan; ?></td>
                            <td style="color: #222; font-family: monospace; font-size: 15px; width: 50%; border-bottom: 1px solid #222; border-radius: 10px; padding: 10px;"><?= $isi_laporan; ?></td>
                            <td style="color: #222; font-family: monospace; font-size: 15px; width: 100%; border-bottom: 1px solid #222; border-radius: 10px; padding: 10px;"><div class="media" style="background: url('../.app/base/DISK-D/src/<?= $foto; ?>')  no-repeat; background-size: 100%; width: 100px; height: 100px; border: 1px solid #222; border-radius: 10px;"></div></td>
                            <td style="color: #222; font-family: monospace; font-size: 15px; width: 50%; border-bottom: 1px solid #222; border-radius: 10px; padding: 10px;"><?= $status; ?></td>
                            <td style="color: #222; font-family: monospace; font-size: 15px; width: 100%; border-bottom: 1px solid #222; border-radius: 10px; padding: 10px;"><button style="background-color: #edf4f0; color: #222; font-size: 15px; box-shadow: 8px 8px 0px #222; width: 100%; height: 40px; border: 1px solid #222; border-radius: 10px; cursor: pointer;" onclick="window.location = 'accept-complaint?post=<?= $id_pengaduan; ?>';">Balas</button></td>
                        </tr>
                        <?php

                                }
                            }
                        
                        ?>
                    </table>
                    <br><br><br>
                </div>
            </div>
        </center>
    </body>
</html>
