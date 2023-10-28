            <div class="row mb">
                    <div class="boxtitle">
                        TÀI KHOẢN
                    </div>
                    <div class="boxcontent1 formtaikhoan">
                        <?php
                        if(isset($_SESSION['user'])){
                            extract($_SESSION['user']);
                        ?>
                            <div class="row mb10">
                                    Xin chào <br>
                                    <?=$user?>
                            </div>
                            <div class="row mb10">
                            <li><a href="index.php?act=mybill">Đơn hàng của tôi</a></li>
                                <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                                <li><a href="index.php?act=edittk">Cập nhật tài khoản</a></li>
                                <?php if($role==1){?>
                                <li><a href="admin/index.php">Đăng nhập Admin</a></li>
                                <?php } ?>
                                <li><a href="index.php?act=thoat">Thoát</a></li>
                            </div>
                        <?php
                        }else{
                        ?>
                            <form action="index.php?act=dangnhap" method="post">
                                <div class="row mb10">
                                    Tên đăng nhập <br/>
                                    <input type="text" name="user" id="">
                                </div>
                                <div class="row mb10">
                                    Mật khẩu <br/>
                                <input type="password" name="pass" id="">
                                </div>
                                <div class="row mb10 ghinho">
                                    <input type="checkbox" name="ghinho" id=""> Ghi nhớ tài khoản ?
                                </div>
                                <div class="row mb10">
                                    <input type="submit" value="Đăng nhập" name="dangnhap">
                                </div>  
                            </form>
                            <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                            <li><a href="index.php?act=dangky">Đăng ký thành viên</a></li>
                        <?php } ?>
                        
                    </div>
                </div>
                <div class="row mb">
                    <div class="boxtitle">
                        DANH MỤC
                    </div>
                    <div class="boxcontent2 menudoc">
                        <ul>
                            <?php
                                foreach($listdmhome as $dm){
                                    extract($dm);
                                    $lin="index.php?act=sanpham&iddm=".$id;
                                    echo '<li><a href="'.$lin.'">'.$name.'</a></li>';
                                }
                            ?>
                        </ul>
                    </div>
                    <div class="boxfooter searbox">
                        <form action="index.php?act=sanpham" method="post">
                            <input type="text" name="kyw" id="">
                            <input type="submit" value="Tìm kiếm">
                        </form>
                    </div>
                </div>
                <div class="row mb">
                    <div class="boxtitle">
                        TOP 10 YÊU THÍCH
                    </div>
                    <div class="row boxcontent">
                        <?php
                            foreach($top10sp as $sp){
                                extract($sp);
                                $lin="index.php?act=sanphamct&idsp=".$id;
                                $hinh=$img_path.$img;
                            echo '
                            <div class="row mb10 top10">
                                <a href="'.$lin.'"><img src="'.$hinh.'" alt=""></a>
                                <a href="'.$lin.'">'.$name.'</a>
                            </div>';
                            }
                        ?>
                    </div>
                </div>