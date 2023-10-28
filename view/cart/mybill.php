<div class="row mb">
  <div class="boxtrai mr">
    <div class="row mb">
      <div class="boxtitle">ĐƠN HÀNG ĐÃ ĐẶT</div>
      <div class="row boxcontent">
      <div class="row mb10 frmdsloai">
                <table>
                    <tr>
                        <th>MÃ ĐƠN HÀNG</th>
                        <th>NGÀY ĐẶT</th>
                        <th>TỔNG GIÁ TRỊ ĐƠN HÀNG</th>
                        <th>Tình trạng đơn hàng</th>
                    </tr>
                    
                    <?php
                        if(is_array($allbill)){
                            foreach($allbill as $bill){
                                extract($bill);
                                $ttdh=getttdh($bill['trangthai']);
                                echo '<tr>
                                    <td>DH'.$bill['id'].'</td>
                                    <td>'.$bill['ngaydathang'].'</td>
                                    <td>'.$bill['tong'].'</td>
                                    <td>'.$ttdh.'</td>
                             </tr> ';
                            }
                        }

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
