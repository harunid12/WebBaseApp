<html>
<!--SweetAlert Needed-->
<link rel="stylesheet" type="text/css" href="../alert/css/sweetalert.css">
<script src="../alert/js/sweetalert-dev.js"></script>
<script src="../alert/js/sweetjs.min"></script>
<!--End SweetAlert Needed-->
</body>

<div id="wraptambah">


<?php
  $nama = htmlspecialchars($_POST['nama']);
  $pekerjaan = htmlspecialchars($_POST['pekerjaan']);
  $alamat = htmlspecialchars($_POST['alamat']);
  $tanggal = "$_POST[tgl_lahir]";
        $tanggal = explode('/',$tanggal);
        $tgl = $tanggal[2] .'-'. $tanggal[0] .'-'. $tanggal[1];
    
    $q = mysqli_query($koneksi, "UPDATE user SET nama='$nama', tgl_lahir='$tgl', pekerjaan='$pekerjaan', alamat='$alamat'  WHERE id='$_POST[id]'");
    if($q){
		echo '<script>
                    document.getElementById("wrap-tambah").innerHTML = 
                    swal({
                        title: "SUKSES",
                        text: "Data user Berhasil Diupdate",
                        type: "success",
                        showConfirmButton: false,
                        timer: 1000,   
                    },
                    function(){
                         window.location.href = "?page=user"
                    });
                </script>';
	} else {
		echo '<script>
                    document.getElementById("wrap-tambah").innerHTML = 
                    swal({
                        title: "GAGAL",
                        text: "Data user Gagal Diupdate",
                        type: "error",
                        showConfirmButton: false,
                        timer: 1000,   
                    },
                    function(){
                        window.location.href = "?page=user"
                    });
                </script>';		
	}
    
?>

</div>
</body>
</html>