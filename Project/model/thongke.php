<?php
function loadallthongke(){
        $sql="select danhmuc.id as id, danhmuc.name, count(sanpham.id) as countsp, min(sanpham.gia) as mingia, max(sanpham.gia) as maxgia, avg(sanpham.gia) as avg";
        $sql.=" from sanpham left join danhmuc on danhmuc.id = sanpham.danhmuc";
        $sql.=" group by danhmuc.id order by danhmuc.id desc";
        $ds=pdo_query($sql);
        return $ds;
    }
    ?>