<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {

		//opsi routing halaman
        case 'home':
            include "home.php";
            break;
        case 'visi-dan-misi':
            include "view/visimisi.php";
            break;
        case 'tupoksi':
            include "view/tupoksi.php";
            break;
        case 'sub-bagian-tatausaha':
            include "view/tatausaha.php";
            break;
        case 'seksi-ptp':
            include "view/ptp.php";
            break;
        case 'seksi-tkpu':
            include "view/tkpu.php";
            break;
        case 'alamat-instalasi':
            include "view/alamat.php";
            break;
			

         //opsi route default
		default:
			include "home.php";
			break;
		}
}else{
        //opsi jika route tidak ditemukan
		include "home.php";
}

?>