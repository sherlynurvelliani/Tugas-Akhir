<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bukti Pesanan</title>
    </head>
    <body> 
        <div style="margin-left:1cm; margin-right:1cm;">
            <table width="100%"> 
                <th>
                    <tr>
                        <td>
                            <img src="<?=base_url('assets/assets/img/lotus_50px.png')?>"> 
                        </td>
                        <td>
                            <p style="font-family: Bookman Old Style; text-align:center; font-size:20px;">PEMERINTAHAN KABUPATEN LOMBOK BARAT</h4>
                            <center style="text-align:justify;font-family: Bookman Old Style; font-size:20px;">TAMAN WISATA NARMADA</center>
                            <small>Jl. Raya Mataram - Labuhan Lombok, Lembuak, Narmada, Kabupaten Lombok Barat, Nusa Tenggara Barat. 83371</small>
                        </td>
                    </tr>
                </th>
            </table><hr style="color:#000000; border : 2 solid"> <br><br>
           <div>
                <table style="margin-left:35%; margin-right:50px">
                    <th>
                        <tr>
                            <th colspan="3"><h4><u>BUKTI PEMESANAN TIKET</u></h4></th>
                        </tr>
                    </th>
                </table><br><br>
                <table>
                    <tr>
                        <td>No. Pesanan </td>
                        <td> :</td>
                        <td><?= $isi->id_booking; ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Pesanan </td>
                        <td> :</td>
                        <td><?= $isi->tanggal; ?></td>
                    </tr>
                    <tr>
                        <td>Nama Pengunjung </td>
                        <td> :</td>
                        <td><?= $isi->nama; ?></td>
                    </tr>
                    <tr>
                        <td>Nomor Hp</td>
                        <td>:</td>
                        <td><?= $isi->no_hp; ?></td>
                    </tr>
                    <tr>
                        <td>Status Bayar</td>
                        <td>:</td>
                        <td><?= $isi->status_bayar; ?></td>
                    </tr>
                     <tr>
                        <td>Jumlah Pengunjung</td>
                        <td>:</td>
                        <td><?= $isi->jumlah_pengunjung; ?> Orang</td>
                    </tr>
                     <tr>
                        <td>Total Harga (Rp)</td>
                        <td>:</td>
                        <td><?= $isi->total_harga; ?></td>
                    </tr>
                     <tr>
                        <td>Nominal Bayar (Rp)</td>
                        <td>:</td>
                        <td><?= $isi->total_harga; ?></td>
                    </tr>
                </table>
                <table width="100%" style="border : 0.1 #000000 solid; margin-left:65%;">
                    <thead>
                        <th>
                            <tr>
                                <td>Narmada,<?= $isi->tanggal; ?></td>
                            </tr>
                            <tr>
                                <td style="align-items: center;">Petugas</td>
                            </tr>
                        </th>
                        <th>
                            <tr>
                                <td><br><br><br></td>
                            </tr>
                        </th>
                        <th>
                            <tr>
                                <td><u>Admin</u></td>
                            </tr>
                        </th>
                    </thead>
                </table>
           </div>
        </div>
    </body>
</html>