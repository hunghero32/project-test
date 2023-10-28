<?php
        function loadall_taikhoan(){
            $sql = "select * from taikhoan order by id desc";
            $listdanhmuc=pdo_query($sql);
            return $listdanhmuc;
        }

        function insert_taikhoan($email, $user, $pass){
            $sql="insert into taikhoan(email, user, pass) values('$email','$user','$pass')";
            pdo_execute($sql);
        }

        function kttaikhoan($user, $pass){
            $sql="select * from taikhoan where user='".$user."' AND pass='".$pass."'";
            $tk=pdo_query_one($sql);
            return $tk;
        }

        function ktemail($email){
            $sql="select * from taikhoan where email='".$email."'";
            $tk=pdo_query_one($sql);
            return $tk;
        }

        function update_taikhoan($id, $email, $user, $pass, $diachi, $sdt){
            $sql="update taikhoan set email='".$email."', user='".$user."', pass='".$pass."', diachi='".$diachi."', sdt='".$sdt."' where id =".$id;
            pdo_execute($sql);
        }
?>