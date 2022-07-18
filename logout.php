<?php
include('config/koneksi.php');
session_start();
echo "<meta http-equiv=refresh content=\"0;url=index.php\">";
session_destroy();
?>