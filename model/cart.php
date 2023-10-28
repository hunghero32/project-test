<?php
    function viewcart($del){
        global $img_path;
        $tong=0;
        foreach($_SESSION['mycart'] as $sp){
            extract($sp);
            $i=0;
            $hinhpath=$img_path.$sp['2'];
            $tong+=$sp['5'];
            $xoasp='<a href="index.php?act=delcart&idcart='.$i.'"><input type="button" value="Xóa"></a>';
            if(is_file($hinhpath)){
              $hinh='<img src="'.$hinhpath.'" alt="" height="80">';
            }
            else{
              $hinh="no";
            }
            if($del==1){
                echo '
                    <tr>
                        <td>'.$hinh.'</td>
                        <td>'.$sp['1'].'</td>
                        <td>'.$sp['3'].'</td>
                        <td>'.$sp['4'].'</td>
                        <td>'.$sp['5'].'</td>
                        <td>'.$xoasp.'</td>
                    </tr>
                    ';
            }else{
                echo '
            <tr>
                <td>'.$hinh.'</td>
                <td>'.$sp['1'].'</td>
                <td>'.$sp['3'].'</td>
                <td>'.$sp['4'].'</td>
                <td>'.$sp['5'].'</td>
            </tr>
            ';
            }
          $i+=1;
        }
        if($del==1){
            echo '
                <tr>
                <td colspan="4">Tổng đơn hàng</td>
                <td>'.$tong.'</td>
                <td></td>
                </tr>';
        }else{
            echo '
                <tr>
                <td colspan="4">Tổng đơn hàng</td>
                <td>'.$tong.'</td>
                </tr>';
        }
    }

    function billchitiet($billct){
        global $img_path;
        $tong=0;
        foreach($billct as $sp){
            extract($sp);
            $i=0;
            $hinhpath=$img_path.$sp['img'];
            $tong+=$sp['thanhtien'];
            if(is_file($hinhpath)){
              $hinh='<img src="'.$hinhpath.'" alt="" height="80">';
            }
            else{
              $hinh="no";
            }
                echo '
            <tr>
                <td>'.$hinh.'</td>
                <td>'.$sp['name'].'</td>
                <td>'.$sp['gia'].'</td>
                <td>'.$sp['soluong'].'</td>
                <td>'.$sp['thanhtien'].'</td>
            </tr>
            ';
          $i+=1;
        }
            echo '
                <tr>
                <td colspan="4">Tổng đơn hàng</td>
                <td>'.$tong.'</td>
                </tr>';

    }

    function tongdonhang(){
        $tong=0;
        foreach($_SESSION['mycart'] as $sp){
            extract($sp);
            $tong+=$sp['5'];
            }
        return $tong;
    }
    function insertbill($iduser, $name, $email, $diachi, $sdt, $pttt, $ngaydathang, $tong){
        $sql="insert into bill(iduser, name, email, diachi, sdt, pttt, ngaydathang, tong) values ('$iduser','$name', '$email', '$diachi', '$sdt', '$pttt', '$ngaydathang', '$tong')";
        return pdo_execute_return($sql);
    }
    function insert_cart($iduser, $idsp, $img, $name, $gia, $soluong, $thanhtien, $idbill){
        $sql="insert into cart(iduser, idsp, img, name, gia, soluong, thanhtien, idbill) values ('$iduser', '$idsp', '$img', '$name', '$gia', '$soluong', '$thanhtien', '$idbill')";
        pdo_execute($sql);
    }

    function loadone_bill($id){
        $sql="select * from bill where id=".$id;
        $dm=pdo_query_one($sql);
        return $dm;
    }
    function loadone_cart($idbill){
        $sql="select * from cart where idbill=".$idbill;
        $dm=pdo_query($sql);
        return $dm;
    }

    function loadall_bill($kyw="", $iduser){
        $sql="select * from bill where 1";
        if($iduser>0) $sql.=" AND iduser=".$iduser;
        if($kyw!="") $sql.=" AND id like '%".$kyw."%'";
        $sql.=" order by id desc";
        $dm=pdo_query($sql);
        return $dm;
    }

    function getpttt($n){
        switch($n){
            case '1':
                $tt="Trả tiền khi nhận hàng";
                break;
            case '2':
                $tt="Chuyển khoản ngân hàng";
                break;
            case '3':
                $tt="Thanh toán online";
                break;
            default:
                $tt="Không trả đó";
                break;
        }
        return $tt;
    }

    function getttdh($n){
        switch($n){
            case '0':
                $tt="Đơn hàng mới";
                break;
            case '1':
                $tt="Đang xử lý";
                break;
            case '2':
                $tt="Đang giao hàng";
                break;
            case '3':
                $tt="Hoàn tất";
                break;
            default:
                $tt="Đơn hàng mới";
                break;
        }
        return $tt;
    }

?>