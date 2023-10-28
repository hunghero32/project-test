<div class="row">
        <div class="row frmtitle mb">
          <h1>DANH SÁCH SẢN PHẨM</h1>
        </div>
        <form action="index.php?act=listsp" method="post">  
                <input type="text" name="kyw">
                <select name="iddm" id="">
                  <option value="0" selected>Tất cả</option>
                        <?php
                            foreach($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                echo '<option value="'.$id.'">'.$name.'</option>';
                            }
                        ?>
                  </select> 
                  <input type="submit" name="listspok" value="GO">
              </form>
        <div class="row frmcontent">
            <div class="row mb10 frmdsloai">
                <table>
                    <tr>
                        <th></th>
                        <th>MÃ SẢN PHẨM</th>
                        <th>TÊN SẢN PHẨM</th>
                        <th>HÌNH</th>
                        <th>GIÁ</th>
                        <th>LƯỢT XEM</th>
                        <th>Setting</th>
                    </tr>
                    
                    <?php
                        foreach($listsanpham as $sp){
                            extract($sp);
                            $suasp='index.php?act=suasp&id='.$id;
                            $xoasp='index.php?act=xoasp&id='.$id;
                            $hinhpath="./uploads/".$img;
                            if(is_file($hinhpath)){
                              $hinh='<img src="'.$hinhpath.'" alt="" height="80">';
                            }
                            else{
                              $hinh="no";
                            }
                            echo '
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>
                                <td>'.$name.'</td>
                                <td>'.$hinh.'</td>
                                <td>'.$gia.'</td>
                                <td>'.$luotxem.'</td>
                                <td>
                                <a href="'.$suasp.'"><input type="button" value="Sửa"></a>
                                <a href="'.$xoasp.'"><input type="button" value="Xoá"></a>
                                </td>
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
            <a href="index.php?act=addsp"><input type="button" value="Nhập thêm" /></a>
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