<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM input_akta WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data akta</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
						<div class="form-group">
                            <label for="para_pihak" class="col-sm-3 control-label">Para Pihak Yang Terlibat</label>
                            <div class="col-sm-9">
                                <input type="text" name="para_pihak" value="<?=$data['para_pihak']?>"class="form-control" id="inputEmail3" placeholder="Para Pihak">
                            </div>
                        </div>
							<div class="form-group">
                            <label for="no_akta" class="col-sm-3 control-label">Nomor Akta</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_akta" value="<?=$data['no_akta']?>"class="form-control" id="inputEmail3" placeholder="Nomor Akta" >
                            </div>
                        </div>
                        <!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                        <div class="form-group">


                            <label class="col-sm-3 control-label">Tanggal</label>
                            <!--untu tahun-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tahun" class="form-control">
                                    <?php for($i=2022;$i>1980;$i--) {?>
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
                        <!--end tanggal lahir-->           

                        <div class="form-group">
                            <label for="jenis_akta" class="col-sm-3 control-label">Jenis Akta</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis_akta" value="<?=$data['jenis_akta']?>" class="form-control" id="inputPassword3" placeholder="Jenis Akta">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Akta</button>
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
    $tgl_masuk=$_POST['tahun']."_".$_POST['bulan']."_".$_POST['tanggal'];
    $jenis_akta=$_POST['jenis_akta'];
    //buat sql
    $sql="UPDATE input_akta SET para_pihak='$para_pihak',no_akta='$no_akta',tgl_masuk='$tgl_masuk',jenis_akta='$jenis_akta' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=arsip&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



