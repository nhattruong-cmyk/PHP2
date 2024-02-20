<?php 

namespace App\Models;
class TaiKhoan extends Connect{

        //Insert TaiKhoan
        function taikhoan_insert($TenNguoiDung,$MatKhau,$QuyenTruyCap)
        {
            $sql = "INSERT INTO nguoidung(`TenNguoiDung`,`MatKhau`,`QuyenTruyCap`) VALUES(?,?,?)";
            $this->pdo_execute($sql,$TenNguoiDung,$MatKhau,$QuyenTruyCap);
        }

        //Update
        function taikhoan_update($MaNguoiDung, $TenNguoiDung,$MatKhau,$QuyenTruyCap)
        {
            $sql = "UPDATE `nguoidung` SET `TenNguoiDung`=?,`MatKhau`=?,`QuyenTruyCap`=? WHERE `MaNguoiDung`=?";
            $this->pdo_execute($sql,$TenNguoiDung,$MatKhau,$QuyenTruyCap,$MaNguoiDung);
        }

        //Delete
        function taikhoan_delete($MaNguoiDung)
        {
            $sql = "DELETE FROM `taikhoan` WHERE `$MaNguoiDung`=?";
            if (is_array($MaNguoiDung)) {
                foreach ($MaNguoiDung as $id) {
                    $this->pdo_execute($sql, $id);
                }
            } else {
                $this->pdo_execute($sql, $MaNguoiDung);
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

        function taikhoan_select_by_id($MaNguoiDung)
        {
            $sql = "SELECT * FROM nguoidung WHERE MaNguoiDung=?";
            return $this->pdo_query_one($sql, $MaNguoiDung);
        }
        
        function taikhoan_select_by_parent_id($parent_id)
        {
            $sql = "SELECT * FROM taikhoan WHERE parent_id=?";
            return $this->pdo_query($sql, $parent_id);
        }
        function user_select_by_username($TenNguoiDung)
        {
            $sql = "SELECT * FROM `nguoidung` WHERE TenNguoiDung = '$TenNguoiDung';";
            return  $this->pdo_query_one($sql);
        }
        function checkuser($TenNguoiDung, $MatKhau)
        {
            $sql = "SELECT * FROM `nguoidung` WHERE TenNguoiDung = '$TenNguoiDung' AND MatKhau = '$MatKhau';";
            return  $this->pdo_query_one($sql);
        }
    }
    
?>