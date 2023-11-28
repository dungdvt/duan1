<?php
    include 'model/pdo.php';
    include 'model/dichvu.php';
    include 'view/header.php';
    include 'global.php';
    include 'model/loai.php';
   
    $loainew =  loadall_loai();
    if(isset($_GET['act']) && ($_GET['act']!= "")){
            $act = $_GET['act'];
            switch ($act) {
                case 'dsdv':
                   
                    break;
                case 'gioithieu':
                    include 'view/gioithieu.php';
                    break;
                case 'lienhe':
                    include 'view/lienhe.php';
                    break;
                default:
                    include 'view/home.php';
                    break;
            }
    }else {
        include 'view/home.php';
    }
    
    include 'view/footer.php';

?>      