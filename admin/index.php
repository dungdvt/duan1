<?php
include '../model/pdo.php';
include '../model/loai.php';
include '../model/dichvu.php';
include '../model/thongke.php';
include 'header.php';

    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch ($act){
            case 'addloai':
                //Kiem tra nguoi dung co click vao nut add hay khong
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $tenloai=$_POST['tenloai'];
                    insert_loai($tenloai);
                    $thongbao = "Successfully!!!";
                }
                include 'loai/add.php';
                break;
            case 'listloai':
                $listloai= loadall_loai();
                include 'loai/list.php';
                break;
            case 'xoaloai':
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    delete_loai($_GET['id']);
                }
                $listloai= loadall_loai();
                include 'loai/list.php';
                break;
                case 'sualoai':
                    if(isset($_GET['id']) && ($_GET['id']>0)){
                        $loai = loadone_loai($_GET['id']);
                    }
                    include 'loai/update.php';
                    break;
                case 'updateloai':
                    if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                        $tenloai=$_POST['tenloai'];
                        $id=$_POST['id'];
                        update_loai($id, $tenloai);
                        $thongbao = "Successfully!!!";
                    }
                    $sql = "SELECT * FROM loaidv ORDER BY id DESC";
                    $listloai = pdo_query($sql);
                    include 'loai/list.php';
                    break;
                    //Controller dichvu
            case 'adddv':
                    if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                        $idloai=$_POST['idloai'];
                        $tendv=$_POST['tendv'];
                        $giadv=$_POST['giadv'];
                        $mota=$_POST['mota'];
                        $anh=$_FILES['anh']['name'];
                        $target_dir="../upload/";
                        $target_file = $target_dir.basename($_FILES['anh']['name']);
                        if(move_uploaded_file($_FILES['anh']['tmp_name'], $target_file)){
                
                    }else{

                    }
                        insert_dichvu($tendv, $giadv, $anh, $mota,$idloai);
                        $thongbao = "Successfully!!!";
                    }
                        $listloai = loadall_loai();
                        include 'dichvu/add.php';
                        break;
            case 'listdv':
                if(isset($_POST['listok']) && ($_POST['listok'])){
                    $kyw=$_POST['kyw'];
                    $idloai=$_POST['idloai'];
                }
                else{
                    $kyw="";
                    $idloai=0; 
                 }
                $listloai = loadall_loai();
                $listdichvu = loadall_dichvu("", $idloai);
                include 'dichvu/list.php';
                break;
            case 'xoadv':
                    if(isset($_GET['id']) && ($_GET['id']>0)){
                        delete_dichvu($_GET['id']);
                    }
                    $listdichvu = loadall_dichvu("", 0);
                    include 'dichvu/list.php';
                    break;
            case 'suadv':
                    if(isset($_GET['id']) && ($_GET['id']>0)){
                    $dichvu = loadone_dichvu($_GET['id']);
                    }
                    $listloai = loadall_loai();
                    include 'dichvu/update.php';
                    break;
            case 'updatedv':
                        if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                            $id=$_POST['id'];
                            $idloai= $_POST['idloai'];
                            $tendv=$_POST['tendv'];
                            $giadv=$_POST['giadv'];
                            $mota=$_POST['mota'];
                            $anh=$_FILES['anh']['name'];
                            $target_dir="../upload/";
                            $target_file = $target_dir.basename($_FILES['anh']['name']);
                            if(move_uploaded_file($_FILES['anh']['tmp_name'], $target_file)){
                                
                            }else{
        
                            }
                            update_dichvu($id, $idloai, $tendv, $giadv, $mota, $anh);
                            $thongbao = "Successfully!!!";
                        }
                        $listloai = loadall_loai();
                        $listdichvu = loadall_dichvu("", 0); 
                        include 'dichvu/list.php';
                        break;


            case 'thongke':
                            $listthongke = load_thongke_dichvu_loai();
                            include "thongke/list.php";
                            break;
            case 'bieudo':
                            $listthongke = load_thongke_dichvu_loai();
                            include "thongke/bieudo.php";
                            break;               
        default:

        break;

        }
    } else{
        include 'home.php';
    }
       
    include 'footer.php';
