<html translate="off" <?php require '../../.app/manifest/_manifest_.php'; ?>>
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

                $app->go("sign-in");

            }

            if($_SERVER['REQUEST_METHOD'] == "POST") {

                session_destroy();
                $app->go("../" . $setup['main-page-admin']);

            }

        ?>
        <title>Pengaduan Masyarakat</title>
        <meta name="description" content="Ajukan pengaduan anda di Pengaduan Masyarakat"/>
        <meta name="keywords" content="Pengaduan Masyarakat"/>
        <meta name="authors" content="Kementerian Kesehatan Republik Indonesia"/>
        <meta name="viewport" content="width=device=width, initial-scale=1, maximum-scale=1.0, user-scalable=0"/>
        <meta charset="utf-8">

        <link rel="shortcut icon" type="image/png" href="../../.app/base/DISK-C/src/shortcuticon.png"/>
        <link rel="stylesheet" type="text/css" href="../../.app/assets/assets.css"/>
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
            .pmsp .alert {

                top: 50%;
                transform: translateY(-50%);
                position: relative;

            }
            @media screen and (min-width: 769px) {
                .pmsp .alert {

                    top: 50%;
                    transform: translateY(-50%);
                    position: relative;

                }
            }
            .pmsp .alert .alert-text {

                color: #222;
                font-size: 30px;

            }
            @media screen and (min-width: 769px) {
                .pmsp .alert .alert-text {

                    color: #222;
                    font-size: 30px;

                }
            }
            .pmsp .alert .alert-button {

                background-color: #8e9dce;
                color: #222;
                box-shadow: 8px 8px 0px #222;
                font-size: 15px;
                width: 100%;
                height: 40px;
                border: 1px solid #222;
                border-radius: 10px;
                margin-top: 20px;
                transition: 0.2s;
                cursor: default;

            }
            @media screen and (min-width: 769px) {
                .pmsp .alert .alert-button {

                    background-color: #8e9dce;
                    color: #222;
                    box-shadow: 8px 8px 0px #222;
                    font-size: 15px;
                    width: 30%;
                    height: 40px;
                    border: 1px solid #222;
                    border-radius: 10px;
                    margin-top: 20px;
                    transition: 0.2s;
                    cursor: pointer;

                }
            }
            .pmsp .alert .alert-button:hover {

                background-color: #8e9dce;
                color: #222;
                box-shadow: 4px 4px 0px #222;
                font-size: 15px;
                width: 100%;
                height: 40px;
                border: 1px solid #222;
                border-radius: 10px;
                margin-top: 20px;
                transition: 0.2s;
                cursor: default;

            }
            @media screen and (min-width: 769px) {
                .pmsp .alert .alert-button:hover {

                    background-color: #8e9dce;
                    color: #222;
                    box-shadow: 4px 4px 0px #222;
                    font-size: 15px;
                    width: 30%;
                    height: 40px;
                    border: 1px solid #222;
                    border-radius: 10px;
                    margin-top: 20px;
                    transition: 0.2s;
                    cursor: pointer;

                }
            }
        </style>
    </head>
    <body>
        <center>
            <div class="pmsp">
                <div class="alert">
                    <h1 class="alert-text">Data berhasil di ubah</h1>
                    <form action="" method="post">

                        <button class="alert-button" type="submit" name="submit">Lanjutkan</button>

                    </form>
                </div>
            </div>
        </center>
    </body>
</html>