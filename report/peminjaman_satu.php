<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Klien</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM klien WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Akta Notaris Wihardi Kisaran  </h2>
                        <h4>Jalan Masmansyur No. 39, Tegal Sari, Kec. Kota Kisaran Barat <br>  Kabupaten Asahan, Sumatera Utara, 21218</h4>
                        <hr>
                        <h3>DATA KLIEN </h3>
                        <table class="table table-bordered table-striped table-hover">
                            <tbody>
								<tr>
                                    <td>Nomor Akta</td> <td><?= $data['no_akta'] ?></td>
                                </tr>
                                <tr>
                                    <td>Nomor KTP</td> <td><?= $data['no_ktp'] ?></td>
                                </tr>
                                <tr>
                                    <td>Nama Lengkap</td> <td><?= $data['nama'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td> <td><?= $data['tgl_lahir'] ?></td>
                                </tr>
								<tr>
                                    <td>Nomor HP</td> <td><?= $data['no_hp'] ?></td>
                                </tr>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Wihardi, S.H., M.Kn<strong></u><br>
                                        NIP.102871291416712
									</td>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
