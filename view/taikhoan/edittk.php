<div class="row mb">
  <div class="boxtrai mr">
    <div class="row mb">
      <div class="boxtitle">CẬP NHẬT TÀI KHOẢN</div>
      <div class="row boxcontent formtaikhoan">
          <?php
            if(isset($_SESSION['user'])&& (is_array($_SESSION['user']))){
                extract($_SESSION['user']);
            }
          ?>
          <form action="index.php?act=edittk" method="post">
              <input type="hidden" name="id" value="<?=$id?>">
              <div class="row mb10">
                Email
                <input type="email" name="email" value="<?=$email?>">
              </div>
              <div class="row mb10">
                Tên đăng nhập
                <input type="text" name="user" value="<?=$user?>">
              </div>
              <div class="row mb10">
                Mật khẩu
                <input type="password" name="pass" value="<?=$pass?>">
              </div>
              <div class="row mb10">
                Địa chỉ
                <input type="text" name="diachi" value="<?=$diachi?>">
              </div>
              <div class="row mb10">
                Số điện thoại
                <input type="text" name="sdt" value="<?=$sdt?>">
              </div>
              <div class="row mb10">
                <input type="submit" value="Cập nhật" name="capnhat">
                <input type="reset" value="Nhập lại">
              </div>
          </form>
      </div>

    </div>
  </div>
  <div class="boxphai">
    <?php       
      include "view/boxphai.php";
    ?>
  </div>
</div>
