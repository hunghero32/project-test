<?php
    if(is_array($sp)){
        extract($sp);
        $ten=$name;
    }
    $hinhpath="./uploads/".$img;
    if(is_file($hinhpath)){
      $hinh='<img src="'.$hinhpath.'" alt="" height="80">';
    }
    else{
      $hinh="no";
    }
?>

<div class="row">
        <div class="row frmtitle">
            <h1>CẬP NHẬT SẢN PHẨM</h1>
        </div>
        <div class="row frmcontent">
            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?=$id?>">
                <div class="row mb10">
                    Danh mục<br>
                    <select name="iddm" id="">
                        <?php
                            foreach($listdanhmuc as $dm){
                                extract($dm);
                                if($danhmuc==$id)
                                    echo '<option value="'.$id.'" selected>'.$name.'</option>';
                                else
                                    echo '<option value="'.$id.'">'.$name.'</option>';
                            }
                        ?>
                    </select> 
                </div>
                <div class="row mb10">
                    Tên sản phẩm<br>
                    <input type="text" name="tensp" id="" value="<?=$ten?>">
                </div>
                <div class="row mb10">
                    Giá<br>
                    <input type="text" name="giasp" id="" value="<?=$gia?>">
                </div>
                <div class="row mb10">
                    Hình<br>
                    <input type="file" name="hinhsp">
                    <input type="hidden" name="hinhspcu" value="<?=$img?>">
                    <?php
                        echo $hinh;
                    ?>
                </div>
                <div class="row mb10">
                    Mô tả<br>
                    <textarea name="motasp" id="" cols="30" rows="10"><?=$mota?></textarea>
                </div>
                <div class="row mb10">
                    <input type="submit" name="capnhat" value="Cập nhật">
                    <input type="reset" value="Nhập lại">
                    <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
                </div>
                <?php
                    if(isset($thongbao)&&$thongbao!="") echo "Cập nhật thành công";
                ?>
            </form>
        </div>
</div>