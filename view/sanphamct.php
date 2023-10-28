<div class="row mb">
  <div class="boxtrai mr">
    <div class="row mb">
      <?php
        extract($spct);
      ?>
      <div class="boxtitle"><b><?=$name?></b><p style="color: red;" ><?=$gia?> VNĐ </p></div>
      <div class="row boxcontent">
        <?php
          $hinh=$img_path.$img;
          echo '<div class="row mb ctsp">
                  <img src="'.$hinh.'" alt="">
                  
                </div>';
          echo $mota;
        ?>
      </div>

    </div>
    <div class="row mb">
      <div class="boxtitle">BÌNH LUẬN</div>
      <div class="row boxcontent">
      <table>
                    <?php foreach($binhluan as $value): ?>
                    <tr>
                        <td><?php echo $value['noidung']?></td>
                        <td><?php echo $value['user']?></td>
                        <td><?php echo date("d/m/Y", strtotime($value['ngaybinhluan'])) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <div class="box_search">
                <form action="index.php?act=sanphamct&idsp=<?=$id?>" method="POST">
                    <input type="hidden" name="idsp" value="<?=$id?>">
                    <input type="text" name="noidung">
                    <input type="submit" name="guibinhluan" value="Gửi bình luận">
                </form>
      </div>
    </div>
    <div class="row mb">
      <div class="boxtitle">SẢN PHẨM CÙNG LOẠI</div>
      <div class="row boxcontent">
        <?php
          foreach($spcungloai as $sp){
            extract($sp);
            $lin="index.php?act=sanphamct&idsp=".$id;
            echo '<li><a href="'.$lin.'">'.$name.'</a></li>';
          }
        ?>
        
      </div>
    </div>
  </div>
  <div class="boxphai">
    <?php       
      include "boxphai.php";
    ?>
  </div>
</div>
