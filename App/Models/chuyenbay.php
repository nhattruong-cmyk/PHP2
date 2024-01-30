<?php 

class ChuyenBay extends Connect{

        //Insert ChuyenBay
        function chuyenbay_insert($MaSanBayXuatPhat,$MaSanBayDen,$NgayGioXuatPhat,$NgayGioDen)
        {
            $sql = "INSERT INTO chuyenbay(`MaSanBayXuatPhat`,`MaSanBayDen`,`NgayGioXuatPhat`,`NgayGioDen`) VALUES(?,?,?,?)";
            $this->pdo_execute($sql,$MaSanBayXuatPhat,$MaSanBayDen,$NgayGioXuatPhat,$NgayGioDen);
        }

        //Update
        function chuyenbay_update($MaChuyenBay, $MaSanBayXuatPhat,$MaSanBayDen,$NgayGioXuatPhat,$NgayGioDen)
        {
            $sql = "UPDATE `chuyenbay` SET `MaSanBayXuatPhat`=?,`MaSanBayDen`=?,`NgayGioXuatPhat`=?, `NgayGioDen`=? WHERE `MaChuyenBay`=?";
            $this->pdo_execute($sql,$MaSanBayXuatPhat,$MaSanBayDen,$NgayGioXuatPhat,$NgayGioDen,$MaChuyenBay);
        }

        //Delete
        function chuyenbay_delete($MaChuyenBay)
        {
            $sql = "DELETE FROM `ChuyenBay` WHERE `$MaChuyenBay`=?";
            if (is_array($MaChuyenBay)) {
                foreach ($MaChuyenBay as $id) {
                    $this->pdo_execute($sql, $id);
                }
            } else {
                $this->pdo_execute($sql, $MaChuyenBay);
            }
        }

        //Get all
        function chuyenbay_select_all()
        {
            $sql = "SELECT * FROM chuyenbay";
            return $this->pdo_query($sql);
        }



        function num_row_ChuyenBay(){
            $sql = "SELECT count(*) as num_row FROM ChuyenBay";
            return $this->pdo_query($sql);
        }

        function ChuyenBay_select_page($start,$num_rows_in_page){
            $sql = "SELECT * FROM ChuyenBay LIMIT $start,$num_rows_in_page";
            return $this->pdo_query($sql);
        }

        function ChuyenBay_select_by_id($MaChuyenBay)
        {
            $sql = "SELECT * FROM ChuyenBay WHERE MaChuyenBay=?";
            return $this->pdo_query_one($sql, $MaChuyenBay);
        }
        
        function ChuyenBay_select_by_parent_id($parent_id)
        {
            $sql = "SELECT * FROM ChuyenBay WHERE parent_id=?";
            return $this->pdo_query($sql, $parent_id);
        }

    }
    
?>