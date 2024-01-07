<?php 

class TaiKhoan extends Connect{

        //Insert TaiKhoan
        function taikhoan_insert($MaNguoiDung,$TenNguoiDung,$MatKhau,$QuyenTruyCap)
        {
            $sql = "INSERT INTO nguoidung(`MaNguoiDung`,`TenNguoiDung`,`MatKhau`,`QuyenTruyCap`) VALUES(?,?,?,?)";
            $this->pdo_execute($sql,$MaNguoiDung,$TenNguoiDung,$MatKhau,$QuyenTruyCap);
        }

        //Update
        function taikhoan_update($Mataikhoan, $Tentaikhoan,$DiaChi,$ThongTinLienHe)
        {
            $sql = "UPDATE `taikhoan` SET `Tentaikhoan`=?,`DiaChi`=?,`ThongTinLienHe` WHERE `Mataikhoan`=?";
            $this->pdo_execute($sql,$Tentaikhoan,$DiaChi,$ThongTinLienHe,$Mataikhoan);
        }

        //Delete
        function taikhoan_delete($Mataikhoan)
        {
            $sql = "DELETE FROM `taikhoan` WHERE `$Mataikhoan`=?";
            if (is_array($Mataikhoan)) {
                foreach ($Mataikhoan as $id) {
                    $this->pdo_execute($sql, $id);
                }
            } else {
                $this->pdo_execute($sql, $Mataikhoan);
            }
        }

        //Get all
        function taikhoan_select_all()
        {
            $sql = "SELECT * FROM nguoidung";
            return $this->pdo_query($sql);
        }



        function num_row_taikhoan(){
            $sql = "SELECT count(*) as num_row FROM taikhoan";
            return $this->pdo_query($sql);
        }

        function taikhoan_select_page($start,$num_rows_in_page){
            $sql = "SELECT * FROM taikhoan LIMIT $start,$num_rows_in_page";
            return $this->pdo_query($sql);
        }

        function taikhoan_select_by_id($Mataikhoan)
        {
            $sql = "SELECT * FROM taikhoan WHERE Mataikhoan=?";
            return $this->pdo_query_one($sql, $Mataikhoan);
        }
        
        function taikhoan_select_by_parent_id($parent_id)
        {
            $sql = "SELECT * FROM taikhoan WHERE parent_id=?";
            return $this->pdo_query($sql, $parent_id);
        }

    }
    
?>