<html translate="off" <?php require '../.app/manifest/_manifest_.php'; ?>>
    <head>
        <?php

            session_start();

            if(

                $_SESSION['nik'] &&
                $_SESSION['nama'] &&
                $_SESSION['telp'] &&
                $_SESSION['username'] &&
                $_SESSION['password']

            ) {

            } else {

                $app->go($setup['main-page-user']);

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
            .pmsp .a-frame .a-frame-profile {

                background-color: #edf4f0;
                color: #222;
                box-shadow: 10px 15px 0px #222;
                width: 96%;
                border: 1px solid #222;
                border-radius: 10px;
                padding: 5% 2% 5% 2%;

            }
            @media screen and (min-width: 769px) {
                .pmsp .a-frame .a-frame-profile {

                    background-color: #edf4f0;
                    color: #222;
                    box-shadow: 10px 15px 0px #222;
                    width: 28%;
                    border: 1px solid #222;
                    border-radius: 10px;
                    padding: 2% 1% 2% 1%;

                }
            }
            .pmsp .a-frame .a-frame-profile .a-frame-profile-text {

                color: #222;
                text-align: left;
                font-size: 25px;

            }
            @media screen and (min-width: 769px) {
                .pmsp .a-frame .a-frame-profile .a-frame-profile-text {

                    color: #222;
                    text-align: left;
                    font-size: 25px;

                }
            }
            .pmsp .a-frame .a-frame-profile .a-frame-profile-detail {

                width: 100%;
                border-bottom: 1px solid #222;
                padding: 10px 0px 10px 0px;

            }
            @media screen and (min-width: 769px) {
                .pmsp .a-frame .a-frame-profile .a-frame-profile-detail {

                    width: 100%;
                    border-bottom: 1px solid #222;
                    padding: 10px 0px 10px 0px;

                }
            }
            .pmsp .a-frame .a-frame-profile .a-frame-profile-detail .a-frame-profile-detail-text1 {

                color: #222;
                text-align: left;
                font-size: 15px;
                margin-bottom: 10px;

            }
            @media screen and (min-width: 769px) {
                .pmsp .a-frame .a-frame-profile .a-frame-profile-detail .a-frame-profile-detail-text1 {

                    color: #222;
                    text-align: left;
                    font-size: 15px;
                    margin-bottom: 10px;

                }
            }
            .pmsp .a-frame .a-frame-profile .a-frame-profile-detail .a-frame-profile-detail-text2 {

                color: #222;
                text-align: left;
                font-size: 15px;

            }
            @media screen and (min-width: 769px) {
                .pmsp .a-frame .a-frame-profile .a-frame-profile-detail .a-frame-profile-detail-text2 {

                    color: #222;
                    text-align: left;
                    font-size: 15px;

                }
            }
            .pmsp .a-frame .a-frame-profile .a-frame-profile-button {

                background-color: #a6c9dd;
                color: #222;
                font-size: 15px;
                box-shadow: 8px 8px 0px #222;
                width: 100%;
                height: 40px;
                border: 1px solid #222;
                border-radius: 10px;
                margin-top: 30px;
                transition: 0.2s;
                cursor: default;

            }
            @media screen and (min-width: 769px) {
                .pmsp .a-frame .a-frame-profile .a-frame-profile-button {

                    background-color: #a6c9dd;
                    color: #222;
                    font-size: 15px;
                    box-shadow: 8px 8px 0px #222;
                    width: 100%;
                    height: 40px;
                    border: 1px solid #222;
                    border-radius: 10px;
                    margin-top: 30px;
                    transition: 0.2s;
                    cursor: pointer;

                }
            }
            .pmsp .a-frame .a-frame-profile .a-frame-profile-button:hover {

                background-color: #a6c9dd;
                color: #222;
                font-size: 15px;
                box-shadow: 4px 4px 0px #222;
                width: 100%;
                height: 40px;
                border: 1px solid #222;
                border-radius: 10px;
                margin-top: 30px;
                transition: 0.2s;
                cursor: default;

            }
            @media screen and (min-width: 769px) {
                .pmsp .a-frame .a-frame-profile .a-frame-profile-button:hover {

                    background-color: #a6c9dd;
                    color: #222;
                    font-size: 15px;
                    box-shadow: 4px 4px 0px #222;
                    width: 100%;
                    height: 40px;
                    border: 1px solid #222;
                    border-radius: 10px;
                    margin-top: 30px;
                    transition: 0.2s;
                    cursor: pointer;

                }
            }
            .pmsp .a-frame .a-frame-privacy {

                background-color: #edf4f0;
                color: #222;
                box-shadow: 10px 15px 0px #222;
                width: 96%;
                border: 1px solid #222;
                border-radius: 10px;
                margin-top: 40px;
                padding: 5% 2% 5% 2%;

            }
            @media screen and (min-width: 769px) {
                .pmsp .a-frame .a-frame-privacy {

                    background-color: #edf4f0;
                    color: #222;
                    box-shadow: 10px 15px 0px #222;
                    width: 28%;
                    border: 1px solid #222;
                    border-radius: 10px;
                    margin-top: 40px;
                    padding: 2% 1% 2% 1%;

                }
            }
            .pmsp .a-frame .a-frame-privacy .a-frame-privacy-text {

                color: #222;
                text-align: left;
                font-size: 25px;

            }
            @media screen and (min-width: 769px) {
                .pmsp .a-frame .a-frame-privacy .a-frame-privacy-text {

                    color: #222;
                    text-align: left;
                    font-size: 25px;

                }
            }
            .pmsp .a-frame .a-frame-privacy .a-frame-privacy-detail {

                width: 100%;
                border-bottom: 1px solid #222;
                padding: 10px 0px 10px 0px;

            }
            @media screen and (min-width: 769px) {
                .pmsp .a-frame .a-frame-privacy .a-frame-privacy-detail {

                    width: 100%;
                    border-bottom: 1px solid #222;
                    padding: 10px 0px 10px 0px;

                }
            }
            .pmsp .a-frame .a-frame-privacy .a-frame-privacy-detail .a-frame-privacy-detail-text1 {

                color: #222;
                text-align: left;
                font-size: 15px;
                margin-bottom: 10px;

            }
            @media screen and (min-width: 769px) {
                .pmsp .a-frame .a-frame-privacy .a-frame-privacy-detail .a-frame-privacy-detail-text1 {

                    color: #222;
                    text-align: left;
                    font-size: 15px;
                    margin-bottom: 10px;

                }
            }
            .pmsp .a-frame .a-frame-privacy .a-frame-privacy-detail .a-frame-privacy-detail-text2 {

                color: #222;
                text-align: left;
                font-size: 15px;

            }
            @media screen and (min-width: 769px) {
                .pmsp .a-frame .a-frame-privacy .a-frame-privacy-detail .a-frame-privacy-detail-text2 {

                    color: #222;
                    text-align: left;
                    font-size: 15px;

                }
            }
            .pmsp .a-frame .a-frame-privacy .a-frame-privacy-button {

                background-color: #dda6a7;
                color: #222;
                font-size: 15px;
                box-shadow: 8px 8px 0px #222;
                width: 100%;
                height: 40px;
                border: 1px solid #222;
                border-radius: 10px;
                margin-top: 30px;
                transition: 0.2s;
                cursor: default;

            }
            @media screen and (min-width: 769px) {
                .pmsp .a-frame .a-frame-privacy .a-frame-privacy-button {

                    background-color: #dda6a7;
                    color: #222;
                    font-size: 15px;
                    box-shadow: 8px 8px 0px #222;
                    width: 100%;
                    height: 40px;
                    border: 1px solid #222;
                    border-radius: 10px;
                    margin-top: 30px;
                    transition: 0.2s;
                    cursor: pointer;

                }
            }
            .pmsp .a-frame .a-frame-privacy .a-frame-privacy-button:hover {

                background-color: #dda6a7;
                color: #222;
                font-size: 15px;
                box-shadow: 4px 4px 0px #222;
                width: 100%;
                height: 40px;
                border: 1px solid #222;
                border-radius: 10px;
                margin-top: 30px;
                transition: 0.2s;
                cursor: default;

            }
            @media screen and (min-width: 769px) {
                .pmsp .a-frame .a-frame-privacy .a-frame-privacy-button:hover {

                    background-color: #dda6a7;
                    color: #222;
                    font-size: 15px;
                    box-shadow: 4px 4px 0px #222;
                    width: 100%;
                    height: 40px;
                    border: 1px solid #222;
                    border-radius: 10px;
                    margin-top: 30px;
                    transition: 0.2s;
                    cursor: pointer;

                }
            }
            .pmsp .a-frame .a-frame-button {

                background: none;
                color: #64c4c4;
                font-size: 20px;
                cursor: default;

            }
            @media screen and (min-width: 769px) {
                .pmsp .a-frame .a-frame-button {

                    background: none;
                    color: #64c4c4;
                    font-size: 20px;
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
                    <div class="a-frame-profile">
                        <h1 class="a-frame-profile-text">Data Diri</h1>
                        <div class="a-frame-profile-detail">
                            <p class="a-frame-profile-detail-text1">NIK :</p>
                            <p class="a-frame-profile-detail-text2"><?= $crypt->owl256_decode($_SESSION['nik']); ?></p>
                        </div>
                        <div class="a-frame-profile-detail">
                            <p class="a-frame-profile-detail-text1">Nama Lengkap :</p>
                            <p class="a-frame-profile-detail-text2"><?= $crypt->owl128_decode($_SESSION['nama']); ?></p>
                        </div>
                        <div class="a-frame-profile-detail">
                            <p class="a-frame-profile-detail-text1">Nomor Telepon :</p>
                            <p class="a-frame-profile-detail-text2"><?= $crypt->owl192_decode($_SESSION['telp']); ?></p>
                        </div>
                        <button class="a-frame-profile-button" onclick="window.location = 'edit-profile';">Ubah</button>
                    </div>
                    <div class="a-frame-privacy">
                        <h1 class="a-frame-privacy-text">Privasi</h1>
                        <div class="a-frame-privacy-detail">
                            <p class="a-frame-privacy-detail-text1">Username :</p>
                            <p class="a-frame-privacy-detail-text2">@<?= $crypt->owl256_decode($_SESSION['username']); ?></p>
                        </div>
                        <div class="a-frame-privacy-detail">
                            <p class="a-frame-privacy-detail-text1">Password :</p>
                            <p class="a-frame-privacy-detail-text2">***</p>
                        </div>
                        <button class="a-frame-privacy-button" onclick="window.location = 'edit-privacy';">Ubah</button>
                    </div>
                    <br><br><br>
                    <form action="sign-out" method="post">
                        <button class="a-frame-button" type="submit" name="submit"><- Keluar</button>
                    </form>
                    <br><br><br>
                </div>
            </div>
        </center>
    </body>
</html>