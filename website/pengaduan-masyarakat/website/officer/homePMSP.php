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
            .pmsp .a-head .a-head-content .a-head-content-profile {

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
                .pmsp .a-head .a-head-content .a-head-content-profile {

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
            .pmsp .a-head .a-head-content .a-head-content-profile:hover {

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
                .pmsp .a-head .a-head-content .a-head-content-profile:hover {

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
            .pmsp .a-head .a-head-content .a-head-content-profile .a-head-content-profile-media {

                background: url('../.app/base/DISK-C/src/profile.png') no-repeat;
                background-size: 100%;
                width: 45px;
                height: 45px;
                border: 1px solid #222;
                border-radius: 100px;

            }
            @media screen and (min-width: 769px) {
                .pmsp .a-head .a-head-content .a-head-content-profile .a-head-content-profile-media {

                    background: url('../.app/base/DISK-C/src/profile.png') no-repeat;
                    background-size: 100%;
                    width: 45px;
                    height: 45px;
                    border: 1px solid #222;
                    border-radius: 100px;

                }
            }
            .pmsp .a-head .a-head-content .a-head-content-profile .a-head-content-profile-text {

                color: #222;
                font-size: 17px;

            }
            @media screen and (min-width: 769px) {
                .pmsp .a-head .a-head-content .a-head-content-profile .a-head-content-profile-text {

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
            .pmsp .a-frame .a-frame-action {

                color: #222;
                box-shadow: 10px 15px 0px #222;
                width: 96%;
                border: 1px solid #222;
                border-radius: 10px;
                margin: 0px 0px 30px 0px;
                padding: 2% 2%;
                display: block;
                transition: 0.2s;
                cursor: default;

            }
            @media screen and (min-width: 769px) {
                .pmsp .a-frame .a-frame-action {

                    color: #222;
                    box-shadow: 10px 15px 0px #222;
                    width: 41%;
                    border: 1px solid #222;
                    border-radius: 10px;
                    margin: 30px 15px 0px 15px;
                    padding: 2% 2%;
                    display: inline-block;
                    transition: 0.2s;
                    cursor: pointer;

                }
            }
            .pmsp .a-frame .a-frame-action:hover {

                color: #222;
                box-shadow: 4px 6px 0px #222;
                width: 96%;
                border: 1px solid #222;
                border-radius: 10px;
                margin: 0px 0px 30px 0px;
                padding: 2% 2%;
                display: block;
                transition: 0.2s;
                cursor: default;

            }
            @media screen and (min-width: 769px) {
                .pmsp .a-frame .a-frame-action:hover {

                    color: #222;
                    box-shadow: 4px 6px 0px #222;
                    width: 41%;
                    border: 1px solid #222;
                    border-radius: 10px;
                    margin: 30px 15px 0px 15px;
                    padding: 2% 2%;
                    display: inline-block;
                    transition: 0.2s;
                    cursor: pointer;

                }
            }
            .pmsp .a-frame .a-frame-action .a-frame-action-text {

                color: #222;
                text-align: left;
                font-size: 25px;

            }
            @media screen and (min-width: 769px) {
                .pmsp .a-frame .a-frame-action .a-frame-action-text {

                    color: #222;
                    text-align: left;
                    font-size: 25px;

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
                        <div class="a-head-content-profile" onclick="window.location = 'profile';">
                            <p class="a-head-content-profile-text">@<?= $crypt->owl256_decode($_SESSION['username']); ?></p>
                        </div>
                    </div>
                </div>
                <div class="a-frame">
                    <div class="a-frame-action" onclick="window.location = 'complaint';" style="background-color: #d3e8c7;">
                        <p class="a-frame-action-text">Aduan Masyarakat</p>
                    </div>
                    <div class="a-frame-action" onclick="window.location = 'response';" style="background-color: #c7dae8;">
                        <p class="a-frame-action-text">Balasan Aduan</p>
                    </div>
                </div>
            </div>
        </center>
    </body>
</html>