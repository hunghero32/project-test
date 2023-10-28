<div class="row mb">
  <div class="boxtrai mr">
  <form action="index.php?act=xnbill" method="post">
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
                      <td colspan="2"><input  type="text" style="width:300px" name="name" id="" value="<?=$user?>"></td>
                  </tr>
                  <tr>
                      <td>Địa chỉ</td>
                      <td><input type="text" name="diachi" id="" value="<?=$diachi?>"></td>
                  </tr>
                  <tr>
                      <td>Email</td>
                      <td><input type="text" name="email" id="" value="<?=$email?>"></td>
                  </tr>
                  <tr>
                      <td>Điện thoại</td>
                      <td><input type="text" name="sdt" id="" value="<?=$sdt?>"></td>
                  </tr>
              </table>

      </div>
    </div>
    <div class="row mb">
      <div class="boxtitle">PHƯƠNG THỨC THANH TOÁN</div>
      <div class="row boxcontent">
          <table>
              <tr>
                  <td><input type="radio" name="pttt" value="1" id="" checked>Trả tiền khi nhận hàng</td>
                  <td><input type="radio" name="pttt" value="2" id="">Chuyển khoản ngân hàng</td>
                  <td><input type="radio" name="pttt" value="3" id="">Thanh toán online</td>
              </tr>
                        </table>
      </div>
    </div>
    <div class="row mb">
      <div class="boxtitle">THÔNG TIN GIỎ HÀNG</div>
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
                      viewcart(0);
                    ?>
                      
                </table>
            </div>
      </div>
    </div>
    <div class="row mb10">
        <input name="dongydathang" type="submit" value="XÁC NHẬN ĐẶT HÀNG">
    </div>   
    </form>  
  </div>
  <div class="boxphai">
    <?php       
      include "view/boxphai.php";
    ?>
  </div>
</div>
