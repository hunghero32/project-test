<?php

    function loadall_sanpham_home(){
        $sql = "select * from sanpham where 1 order by id desc limit 0,9";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }

    function loadall_sanpham_top10(){
        $sql = "select * from sanpham where 1 order by luotxem desc limit 0,10";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }

    function loadall_sanpham($kyw, $iddm){
        $sql = "select * from sanpham where 1";
        if($kyw!=""){
            $sql.=" and name like '%".$kyw."%'";
        }
        if($iddm!=0){
            $sql.=" and danhmuc='".$iddm."'";
        }
        $sql.=" order by id desc";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }

    function load_sanpham_cungloai($id, $iddm){ 
        $sql="select * from sanpham where danhmuc=".$iddm." AND id <> ".$id;
        $sp=pdo_query($sql);
        return $sp;
    }


    function loadone_sanpham($id){
        $sql="select * from sanpham where id=".$id;
        $sp=pdo_query_one($sql);
        return $sp;
    }

    function insert_sanpham($name,$gia,$img,$mota,$danhmuc){
        $sql="insert into sanpham(name,gia,img,mota,danhmuc) values('$name','$gia','$img','$mota','$danhmuc')";
        pdo_execute($sql);
    }

    function update_sanpham($id,$name,$gia,$img,$mota,$danhmuc){
        $sql="update sanpham set name='".$name."', gia='".$gia."', img='".$img."', mota='".$mota."', danhmuc='".$danhmuc."' where id =".$id;
        pdo_execute($sql);
    }

    function delete_sanpham($id){
        $sql="delete from sanpham where id=".$id;
        pdo_execute($sql);
    }

?>