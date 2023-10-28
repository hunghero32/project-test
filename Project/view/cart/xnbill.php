<div class="row mb">
  <div class="boxtrai mr">
  <div class="row mb">
      <div class="boxtitle">CÁM ƠN</div>
      <div class="row boxcontent" style="text-align: center">
          <h2>Cám ơn quý khách đã đặt hàng</h2>
      </div>
    </div>
    <?php
        if(isset($bill)&& is_array($bill)){
            extract($bill);
        }
    ?>
    <div class="row mb">
      <div class="boxtitle">THÔNG TIN ĐƠN HÀNG</div>
      <div class="row boxcontent">
          <li>-Mã đơn hàng: DH<?=$bill['id']?></li>
          <li>-Ngày đặt hàng: <?=$bill['ngaydathang']?></li>
          <li>-Tổng đơn hàng: <?=$bill['tong']?></li>
          <li>-Phương thức thanh toán: <?=getpttt($bill['pttt']);?></li>
      </div>
    </div>
    <div class="row mb">
      <div class="boxtitle">THÔNG TIN ĐẶT HÀNG</div>
      <div class="row boxcontent formtaikhoan">
              <table>
                  <?php
                    if(isset($_SESSION['user'])){
                        $user=$_SESSION['user']['user'];
                        $diachi=$_SESSION['user']['diachi'];
                        $email=$_SESSION['user']['email'];
                        $sdt=$_SESSION['user']['sdt'];
                    }else{
                        $user="";
                        $diachi="";
                        $email="";
                        $sdt="";
                    }
                  ?>
                  <tr>
                      <td>Nguời đặt hàng</td>
                      <td><?=$user?></td>
                  </tr>
                  <tr>
                      <td>Địa chỉ</td>
                      <td><?=$diachi?></td>
                  </tr>
                  <tr>
                      <td>Email</td>
                      <td><?=$email?></td>
                  </tr>
                  <tr>
                      <td>Điện thoại</td>
                      <td><?=$sdt?></td>
                  </tr>
              </table>

      </div>
    </div>
    <div class="row mb">
      <div class="boxtitle">THÔNG TIN SẢN PHẨM</div>
      <div class="row boxcontent">
      <div class="row mb10 frmdsloai">
                <table>
                    <tr>
                        <th>Hình</th>
                        <th>Sản phẩm</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                    </tr>  
                    <?php
                      billchitiet($billct);
                    ?>
                </table>
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
