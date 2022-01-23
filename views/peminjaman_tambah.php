<?php
$nope=$_GET['nope'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM input_akta WHERE no_akta ='$nope'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Tambah Data Klien</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="no_akta" class="col-sm-3 control-label">Nomor Akta</label>
                            <div class="col-sm-9">
								<input type="text" name="no_akta" value="<?=$data['no_akta']?>" class="form-control" id="inputEmail3" placeholder="Nomor Akta" readonly="true">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="no_ktp" class="col-sm-3 control-label">Nomor KTP</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_ktp" class="form-control" id="inputEmail3" placeholder="Masukkan Nomor KTP">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Masukkan Nama Lengkap">
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="tgl_lahir" class="col-sm-3 control-label">Tanggal Lahir</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_lahir" class="form-control" id="inputEmail3" placeholder="Tanggal Lahir">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Nomor Hp</label>
                            <div class="col-sm-3">
                                <input type="text" name="no_hp" class="form-control" id="inputEmail3" placeholder="Nomor Hp">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Informasi Klien</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=arsip&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Akta
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $no_akta=$_POST['no_akta'];
	$no_ktp=$_POST['no_ktp'];
	$nama=$_POST['nama'];
    $tgl_lahir=$_POST['tgl_lahir'];
    $no_hp=$_POST['no_hp'];
    //buat sql
    $sql="INSERT INTO klien VALUES ('$no_akta','$no_ktp','$nama','$tgl_lahir','$no_hp','')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Peminjaman Error");
    if ($query){
        echo "<script>window.location.assign('?page=peminjaman&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
