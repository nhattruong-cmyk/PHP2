<?php 

namespace App\Models;
class HanhKhach extends Connect{

        //Insert hanhkhach
        function chuyenbay_insert($MaChuyenBay,$TenChuyenBay,$DiaChi,$ThongTinLienHe)
        {
            $sql = "INSERT INTO hanhkhach(`MaChuyenBay`,`TenChuyenBay`,`DiaChi`,`ThongTinLienHe`) VALUES(?,?,?,?)";
            $this->pdo_execute($sql,$MaChuyenBay,$TenChuyenBay,$DiaChi,$ThongTinLienHe);
        }

        //Update
        function hanhkhach_update($MaChuyenBay, $TenChuyenBay,$DiaChi,$ThongTinLienHe)
        {
            $sql = "UPDATE `hanhkhach` SET `TenChuyenBay`=?,`DiaChi`=?,`ThongTinLienHe` WHERE `MaChuyenBay`=?";
            $this->pdo_execute($sql,$TenChuyenBay,$DiaChi,$ThongTinLienHe,$MaChuyenBay);
        }

        //Delete
        function hanhkhach_delete($Mahanhkhach)
        {
            $sql = "DELETE FROM `hanhkhach` WHERE `$Mahanhkhach`=?";
            if (is_array($Mahanhkhach)) {
                foreach ($Mahanhkhach as $id) {
                    $this->pdo_execute($sql, $id);
                }
            } else {
                $this->pdo_execute($sql, $Mahanhkhach);
            }
        }

        //Get all
        function hanhkhach_select_all()
        {
            $sql = "SELECT * FROM hanhkhach";
            return $this->pdo_query($sql);
        }



        function num_row_hanhkhach(){
            $sql = "SELECT count(*) as num_row FROM hanhkhach";
            return $this->pdo_query($sql);
        }

        function hanhkhach_select_page($start,$num_rows_in_page){
            $sql = "SELECT * FROM hanhkhach LIMIT $start,$num_rows_in_page";
            return $this->pdo_query($sql);
        }

        function hanhkhach_select_by_id($Mahanhkhach)
        {
            $sql = "SELECT * FROM hanhkhach WHERE Mahanhkhach=?";
            return $this->pdo_query_one($sql, $Mahanhkhach);
        }
        
        function hanhkhach_select_by_parent_id($parent_id)
        {
            $sql = "SELECT * FROM hanhkhach WHERE parent_id=?";
            return $this->pdo_query($sql, $parent_id);
        }

    }
    
?>