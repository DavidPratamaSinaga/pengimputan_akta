<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Akta</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        
                    <div class="form-group">
                            <label for="para_pihak" class="col-sm-3 control-label">Para Pihak</label>
                            <div class="col-sm-9">
                                <input type="text" name="para_pihak" class="form-control" id="inputPassword3" placeholder="Inputkan Para Pihak Yang Terlibat" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_akta" class="col-sm-3 control-label">Nomor Akta</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_akta"class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Akta" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="tgl_masuk" class="col-sm-3 control-label">Tanggal</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_masuk" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Masuk" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="jenis_akta" class="col-sm-3 control-label">Jenis Akta</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis_akta" class="form-control" id="inputPassword3" placeholder="Inputkan Jenis Akta" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Akta</button>
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
    $para_pihak=$_POST['para_pihak'];
	$no_akta=$_POST['no_akta'];
  $tgl_masuk=$_POST['tgl_masuk'];
  $jenis_akta=$_POST['jenis_akta'];
    //buat sql
    $sql="INSERT INTO input_akta VALUES ('','$para_pihak','$no_akta','$tgl_masuk','$jenis_akta')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=arsip&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
