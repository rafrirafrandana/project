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

            $data_pengaduan = mysqli_query($db, "SELECT * FROM pengaduan");
            
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
        </style>
        <script type="text/javascript">
            window.print()
        </script>
    </head>
    <body>    
        <center>
            <div class="pmsp">
                <div class="a-frame">
                    <br><br><br>
                    <table style="background-color: #fff; width: 100%;">
                        <tr>
                            <th style="color: #222; font-family: sans-serif; font-size: 18px; width: 15%; border: 1px solid #222; padding: 10px;">Tanggal</th>
                            <th style="color: #222; font-family: sans-serif; font-size: 18px; width: 50%; border: 1px solid #222; padding: 10px;">Isi Laporan</th>
                            <th style="color: #222; font-family: sans-serif; font-size: 18px; width: 50%; border: 1px solid #222; padding: 10px;">Tanggapan</th>
                        </tr>
                        <?php 

                            if( mysqli_num_rows($data_pengaduan) ) {
                                while( $row_pengaduan = mysqli_fetch_assoc($data_pengaduan) ) {
                                    
                                    $id_pengaduan   = $row_pengaduan['id_pengaduan'];
                                    $isi_pengaduan  = $crypt->owl256_decode($row_pengaduan['isi_laporan']);

                                    $data_tanggapan = mysqli_query($db, "SELECT * FROM tanggapan WHERE id_pengaduan='$id_pengaduan'");

                                    if( mysqli_num_rows($data_tanggapan) ) {
                                       while( $row_tanggapan = mysqli_fetch_assoc($data_tanggapan) ) {
                                        
                                        $tgl_pengaduan = $crypt->owl128_decode($row_tanggapan['tgl_pengaduan']);
                                        $tanggapan     = $crypt->owl256_decode($row_tanggapan['tanggapan']);

                        ?>
                        <tr>
                            <td style="color: #222; font-family: sans-serif; font-size: 15px; width: 15%; border-bottom: 1px solid #222; padding: 10px;"><?= $tgl_pengaduan; ?></td>
                            <td style="color: #222; font-family: sans-serif; font-size: 15px; width: 50%; border-bottom: 1px solid #222; padding: 10px;"><?= $isi_pengaduan; ?></td>
                            <td style="color: #222; font-family: sans-serif; font-size: 15px; width: 50%; border-bottom: 1px solid #222; padding: 10px;"><?= $tanggapan; ?></td>
                        </tr>
                        <?php

                                       } 
                                    }
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
