<?php

$title = "My Album";
$side = "Album";
include_once "template/header.php";
include_once "../controller/c_album.php";
include_once "../controller/c_foto.php";
if($_SESSION['status']=="login"){
$tampil = new c_album();
$poto = new c_foto();

date_default_timezone_set('Asia/Jakarta');
$waktu = date("Y-m-d H:i:s");

?>

<!-- content -->
<center>
<div class="section">
        <div class="container">
            <h3>Create Album</h3>
    <form class="row g-3 mt-3" action="../routers/r_album.php?aksi=tambah" method="post" enctype="multipart/form-data">
                    <input type="text" name="id" id="id" hidden>
                    <input type="text" name="userid" id="userid" value="<?= $id ?>" hidden>
                    <input type="text" name="date" id="date" value="<?= $waktu ?>" hidden>
                    <div class="col-md-12">
                        <input type="text" name="nama" class="form-control" placeholder="Album Title" maxlength="15" required>
                    </div>
                    <div class="col-md-12">
                   <input type="text" name="desc" class="form-control" placeholder="Description | Max 20 | Optional" maxlength="20">
                    </div>
                    <div class="text-center">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
               </form>
        </div>
</div>
</center>

<?php

include_once "template/footer.php";

}else{
echo "<script type='text/javascript'>
alert('Maaf Anda Belum Login');
window.location = '../login.php';
</script>";
}
?>