<div class="row">
        <div class="row frmtitle mb">
          <h1>DANH SÁCH TÀI KHOẢN</h1>
        </div>
        <div class="row frmcontent">
            <div class="row mb10 frmdsloai">
                <table>
                    <tr>
                        <th></th>
                        <th>MÃ TK</th>
                        <th>USERNAME</th>
                        <th>MẬT KHẨU</th>
                        <th>EMAIL</th>
                        <th>ĐỊA CHỈ</th>
                        <th>ĐIỆN THOẠI</th>
                        <th>VAI TRÒ</th>
                    </tr>
                    
                    <?php
                        foreach($listtk as $tk){
                            extract($tk);
                            $suatk='index.php?act=suasp&id='.$id;
                            $xoatk='index.php?act=xoasp&id='.$id;
                            echo '
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>
                                <td>'.$user.'</td>
                                <td>'.$pass.'</td>
                                <td>'.$email.'</td>
                                <td>'.$diachi.'</td>
                                <td>'.$sdt.'</td>
                                <td>'.$role.'</td>
                            </tr>
                            ';
                        }
                    ?>
                </table>
            </div>
          <div class="row mb10">
            <input type="button" name="select-all" value="Chọn All" />
            <input type="button" name="deselectAll" value="Bỏ chọn All" />
            <input type="button" value="Xóa mục đã chọn" />
          </div>
        </div>
      </div>
      <script>
// Lấy tất cả các checkbox box
const checkboxes = document.querySelectorAll('input[type="checkbox"]');

// Lấy nút chọn tất cả
const selectAllButton = document.querySelector('input[name="select-all"]');

// Lấy nút bỏ chọn tất cả
const deselectAllButton = document.querySelector('input[name="deselectAll"]');

// Thêm sự kiện click vào nút chọn tất cả
selectAllButton.addEventListener('click', () => {
  // Chọn tất cả checkbox box
  checkboxes.forEach(checkbox => {
    checkbox.checked = true;
  });
});
// Thêm sự kiện click vào nút bỏ chọn tất cả
deselectAllButton.addEventListener('click', () => {
  // Bỏ chọn tất cả checkbox box
  checkboxes.forEach(checkbox => {
    checkbox.checked = false;
  });
});
</script>