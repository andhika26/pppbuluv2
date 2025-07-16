<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {

		 //opsi routing halaman
         case 'home':
            include "home.php";
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