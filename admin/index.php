<?php
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/binhluan.php";
    include "../model/taikhoan.php";
    include "../model/thongke.php";
    include "../model/cart.php";
    include "hearder.php";
    
    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch($act){

            //comntroller danh muc
            case 'adddm':
                if(isset($_POST['themmoi'])&&$_POST['themmoi']){
                    $tenloai=$_POST['tenloai'];
                    insert_danhmuc($tenloai);
                    $thongbao="Thêm thành công";
                }
                include "danhmuc/add.php";
                break;
            case 'listdm':
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            case 'xoadm':
                if(isset($_GET['id'])&& $_GET['id']>0){
                    delete_danhmuc($_GET['id']);
                }
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            case 'suadm':
                if(isset($_GET['id'])&&$_GET['id']>0){
                    $dm=loadone_danhmuc($_GET['id']);
                }
                include 'danhmuc/update.php';
                break;
            case 'updatedm':
                if(isset($_POST['capnhat'])&&$_POST['capnhat']){
                    $tenloai=$_POST['tenloai'];
                    $id=$_POST['id'];
                    update_danhmuc($id, $tenloai);
                    $thongbao="Cập nhật thành công";
                }
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            
            //controller san pham
            case 'addsp':
                if(isset($_POST['themmoi'])&&$_POST['themmoi']){
                    $iddm=$_POST['iddm'];
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $mota=$_POST['motasp'];
                    $filename=$_FILES['hinhsp']['name'];
                    $target_dir = "./uploads/";
                    $target_file = $target_dir . basename($_FILES["hinhsp"]["name"]);

                    if (move_uploaded_file($_FILES["hinhsp"]["tmp_name"], $target_file)) {
                        //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                      } else {
                        //echo "Sorry, there was an error uploading your file.";
                      }

                    insert_sanpham($tensp, $giasp, $filename, $mota, $iddm);
                    $thongbao="Thêm thành công";
                }
                $listdanhmuc=loadall_danhmuc();
                include "sanpham/add.php";
                break;
            case 'listsp':
                if(isset($_POST['listspok'])&&$_POST['listspok']){
                    $kyw=$_POST['kyw'];
                    $iddm=$_POST['iddm'];
                }
                else{
                    $kyw='';
                    $iddm=0;
                }
                $listdanhmuc=loadall_danhmuc();
                $listsanpham=loadall_sanpham($kyw, $iddm);
                include "sanpham/list.php";
                break;
            case 'xoasp':
                if(isset($_GET['id'])&& $_GET['id']>0){
                    delete_sanpham($_GET['id']);
                }
                $listsanpham=loadall_sanpham("", 0);
                include "sanpham/list.php";
                break;
            case 'suasp':
                if(isset($_GET['id'])&&$_GET['id']>0){
                    $sp=loadone_sanpham($_GET['id']);
                    $listdanhmuc=loadall_danhmuc();
                }
                include 'sanpham/update.php';
                break;
            case 'updatesp':
                if(isset($_POST['capnhat'])&&$_POST['capnhat']){
                    $id=$_POST['id'];
                    $iddm=$_POST['iddm'];
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $mota=$_POST['motasp'];
                    $filename=$_FILES['hinhsp']['name'];
                    $target_dir = "./uploads/";
                    $target_file = $target_dir . basename($_FILES["hinhsp"]["name"]);

                    if (move_uploaded_file($_FILES["hinhsp"]["tmp_name"], $target_file)) {
                        //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                      } else {
                        //echo "Sorry, there was an error uploading your file.";
                      }

                    if($filename==""){
                        $filename=$_POST['hinhspcu'];
                    }
                    update_sanpham($id,$tensp, $giasp, $filename,$mota,$iddm);
                    $thongbao="Cập nhật thành công";
                }
                $listdanhmuc=loadall_danhmuc();
                $listsanpham=loadall_sanpham("", 0);
                include "sanpham/list.php";
                break;
            case 'dskh':
                $listtk=loadall_taikhoan();
                include "taikhoan/list.php";
                break;        
            case 'dsdh':
                if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                    $kyw=$_POST['kyw'];
                }else{
                    $kyw="";
                }
                $dsdh=loadall_bill($kyw,0);
                include "donhang/list.php";
                break;
            case 'thongke':
                $dstk=loadallthongke();
                include "thongke/list.php";
                break;
        /* Bình luận */ 
            case "dsbl":
                $listBinhLuan = loadall_binhluan(0);
                include "binhluan/list.php";
                break;
            
            case "xoabl":
                if(isset($_GET['id']) && ($_GET['id'])){
                    delete_bl($_GET['id']);
                }
                $listBinhLuan = loadall_binhluan(0);
                include "binhluan/list.php";
                break;
    
    
                      
            //default
            default:
                include "home.php";
                break;
        }
    }
    else{
        include "home.php";
    }
    include "footer.php";
?>