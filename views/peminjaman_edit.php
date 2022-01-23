<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM klien WHERE id='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Detail Data Klien  </h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nope" class="col-sm-3 control-label">Nomor Akta</label>
                             <div class="col-sm-9">
								<input type="text" name="nope" value="<?=$data['no_akta']?>"class="form-control" id="inputEmail3" placeholder="Nomor Akta" readonly="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_ktp" class="col-sm-3 control-label">Nomor KTP</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_ktp" value="<?=$data['no_ktp']?>"class="form-control" id="inputEmail3" placeholder="Nomor Ktp">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" value="<?=$data['nama']?>"class="form-control" id="inputEmail3" placeholder="Nama Lengkap">
                            </div>
                        </div>
						
						<!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tanggal Lahir</label>
                            <!--untu tahun-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tahun" class="form-control">
                                    <?php for($i=2017;$i>1980;$i--) {?>
                                    <option value="<?=$i?>"> <?=$i?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Bulan-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="bulan" class="form-control">
                                    <?php 
                                    $bulan=  array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                                    for($j=12;$j>0;$j--) {?>
                                    <option value="<?=$j?>"> <?=$bulan[$j]?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Tanggal-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tanggal" class="form-control">
                                    <?php for($k=31;$k>0;$k--) {?>
                                    <option value="<?=$k?>"> <?=$k?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>

                        </div>
                        <!--end tanggal--> 
						
                        <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">Nomor HP</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_hp" value="<?=$data['no_hp']?>" class="form-control" id="inputPassword3" placeholder="Nomor Hp">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Klien</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=peminjaman&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Klien
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $nope=$_POST['nope'];
	$no_ktp=$_POST['no_ktp'];
    $nama=$_POST['nama'];
	$tgl_lahir=$_POST['tahun']."-".$_POST['bulan']."-".$_POST['tanggal'];
    $no_hp=$_POST['no_hp'];
    //buat sql
    $sql="UPDATE klien SET no_akta = '$nope', no_ktp='$no_ktp', nama='$nama', tgl_lahir='$tgl_lahir',
	no_hp='$no_hp' WHERE id='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=peminjaman&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



