<?php 

namespace App\Models;
class Category extends Connect{

        //Insert category
        function category_insert($MaSanBayXuatPhat,$MaSanBayDen,$NgayGioXuatPhat,$NgayGioDen)
        {
            $sql = "INSERT INTO category(`MaSanBayXuatPhat`,`MaSanBayDen`,`NgayGioXuatPhat`,`NgayGioDen`) VALUES(?,?,?,?)";
            $this->pdo_execute($sql,$MaSanBayXuatPhat,$MaSanBayDen,$NgayGioXuatPhat,$NgayGioDen);
        }

        //Update
        function category_update($Macategory, $MaSanBayXuatPhat,$MaSanBayDen,$NgayGioXuatPhat,$NgayGioDen)
        {
            $sql = "UPDATE `category` SET `MaSanBayXuatPhat`=?,`MaSanBayDen`=?,`NgayGioXuatPhat`=?, `NgayGioDen`=? WHERE `Macategory`=?";
            $this->pdo_execute($sql,$MaSanBayXuatPhat,$MaSanBayDen,$NgayGioXuatPhat,$NgayGioDen,$Macategory);
        }

        //Delete
        function category_delete($Macategory)
        {
            $sql = "DELETE FROM `category` WHERE `$Macategory`=?";
            if (is_array($Macategory)) {
                foreach ($Macategory as $id) {
                    $this->pdo_execute($sql, $id);
                }
            } else {
                $this->pdo_execute($sql, $Macategory);
            }
        }

        //Get all
        function category_select_all()
        {
            $sql = "SELECT * FROM category";
            return $this->pdo_query($sql);
        }


        function num_row_category(){
            $sql = "SELECT count(*) as num_row FROM category";
            return $this->pdo_query($sql);
        }

        function category_select_page($start,$num_rows_in_page){
            $sql = "SELECT * FROM category LIMIT $start,$num_rows_in_page";
            return $this->pdo_query($sql);
        }

        function category_select_by_id($Macategory)
        {
            $sql = "SELECT * FROM category WHERE Macategory=?";
            return $this->pdo_query_one($sql, $Macategory);
        }
        
        function category_select_by_parent_id($parent_id)
        {
            $sql = "SELECT * FROM category WHERE parent_id=?";
            return $this->pdo_query($sql, $parent_id);
        }

    }
    
?>