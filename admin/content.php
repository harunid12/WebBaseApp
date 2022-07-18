<?php
if ($_GET['page']=='dashboard'){
	include 'dashboard.php';

}elseif ($_GET['page']=='profile') {
	include 'modul/profile/profile.php';
}elseif ($_GET['page']=='profile_update') {
	include 'modul/profile/update.php';

// user

}elseif($_GET['page']=='user'){
	include 'modul/user/view.php';
}elseif($_GET['page']=='user_save'){
	include 'modul/user/save.php';
}elseif($_GET['page']=='user_edit'){
	include 'modul/user/edit.php';
}elseif($_GET['page']=='user_update'){
	include 'modul/user/update.php';
}elseif($_GET['page']=='user_delete'){
	include 'modul/user/delete.php';

// end user

}else{
	include 'error.php';
}
?>