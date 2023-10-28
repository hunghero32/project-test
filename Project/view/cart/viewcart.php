<div class="row mb">
  <div class="boxtrai mr">
    <div class="row mb">
      <div class="boxtitle">GIỎ HÀNG</div>
      <div class="row boxcontent">
      <div class="row mb10 frmdsloai">
                <table>
                    <tr>
                        <th>Hình</th>
                        <th>Sản phẩm</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th>Thao tác</th>
                    </tr>
                    
                    <?php
                      viewcart(1);
                    ?>

                </table>
                
            </div>
            <div class="row mb10">
                <a href="index.php?act=bill"><input type="button" value="TIẾP TỤC ĐẶT HÀNG"></a>
                <a href="index.php?act=delcart"><input type="button" value="XÓA GIỎ HÀNG"></a>
          </div>          
      </div>
    </div>
  </div>
  <div class="boxphai">
    <?php       
      include "view/boxphai.php";
    ?>
  </div>
</div>
