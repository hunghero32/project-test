<div class="row mb">
  <div class="boxtrai mr">
    <div class="row mb">
      <div class="boxtitle">Danh sách >> <?=$tendm?></div>
      <div class="row boxcontent">
                    <?php
                        $i=0;
                        foreach($dssp as $sp){
                            extract($sp);
                            $lin="index.php?act=sanphamct&idsp=".$id;
                            $hinh=$img_path.$img;
                            if(($i==2)||($i==5)||($i==8)||($i==11)){
                                $mr="";
                            }else{
                                $mr="mr";
                            }
                            echo '
                            <div class="boxsp '.$mr.'">
                                <div class="row img"><a href="'.$lin.'"><img src="'.$hinh.'" alt=""></a></div>
                                <p style="color: red; >'.$gia.' VNĐ</p>
                                <a href="'.$lin.'">'.$name.'</a>
                            </div>';
                            $i+=1;
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
