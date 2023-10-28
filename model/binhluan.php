<?php 
    function loadall_binhluan($idsp){
        if($idsp>0){
            $sql = "
            SELECT binhluan.id, binhluan.noidung, taikhoan.user, binhluan.ngaybinhluan FROM `binhluan` 
            LEFT JOIN taikhoan ON binhluan.iduser = taikhoan.id
            LEFT JOIN sanpham ON binhluan.idsp = sanpham.id
            WHERE sanpham.id = $idsp;
        ";
        }else{
            $sql="SELECT * FROM `binhluan` where 1";
        }
        
        $result =  pdo_query($sql);
        return $result;
    }
    function insert_binhluan($idsp, $noidung){
        $date = date('Y-m-d');
        $sql = "
            INSERT INTO `binhluan`(`noidung`, `iduser`, `idsp`, `ngaybinhluan`) 
            VALUES ('$noidung','1','$idsp','$date');
        ";
        //echo $sql;
        //die;
        pdo_execute($sql);
    }

    function delete_bl($id) {
        $sql = "DELETE FROM `binhluan` WHERE id=".$id;
        pdo_execute($sql);
    }

?>