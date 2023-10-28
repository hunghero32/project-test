<div class="row">
        <div class="row frmtitle">
          <h1>DANH SÁCH LOẠI HÀNG</h1>
        </div>
        <div class="row frmcontent">
            <div class="row mb10 frmdsloai">
                <table>
                    <tr>
                        <th></th>
                        <th>MÃ LOẠI</th>
                        <th>TÊN LOẠI</th>
                        <th>Setting</th>
                    </tr>
                    
                    <?php
                        foreach($listdanhmuc as $danhmuc){
                            extract($danhmuc);
                            $suadm='index.php?act=suadm&id='.$id;
                            $xoadm='index.php?act=xoadm&id='.$id;
                            echo '
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>
                                <td>'.$name.'</td>
                                <td>
                                <a href="'.$suadm.'"><input type="button" value="Sửa"></a>
                                <a href="'.$xoadm.'"><input type="button" value="Xoá"></a>
                                </td>
                            </tr>
                            ';
                        }
                    ?>
                </table>
            </div>
          <div class="row mb10">
            <input type="button" value="Chọn All" />
            <input type="button" value="Bỏ chọn All" />
            <input type="button" value="Xóa mục đã chọn" />
            <a href="index.php?act=adddm"><input type="button" value="Nhập thêm" /></a>
          </div>
        </div>
      </div>