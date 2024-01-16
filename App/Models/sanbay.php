<?php 

class SanBay extends Connect{

        //Insert sanbay
        function sanbay_insert($MaSanBay,$TenSanBay,$DiaChi,$ThongTinLienHe)
        {
            $sql = "INSERT INTO sanbay(`MaSanBay`,`TenSanBay`,`DiaChi`,`ThongTinLienHe`) VALUES(?,?,?,?)";
            $this->pdo_execute($sql,$MaSanBay,$TenSanBay,$DiaChi,$ThongTinLienHe);
        }

        //Update
        function sanbay_update($MaSanBay, $TenSanBay,$DiaChi,$ThongTinLienHe)
        {
            $sql = "UPDATE `sanbay` SET `TenSanBay`=?,`DiaChi`=?,`ThongTinLienHe` WHERE `MaSanBay`=?";
            $this->pdo_execute($sql,$TenSanBay,$DiaChi,$ThongTinLienHe,$MaSanBay);
        }

        //Delete
        function sanbay_delete($MaSanBay)
        {
            $sql = "DELETE FROM `sanbay` WHERE `$MaSanBay`=?";
            if (is_array($MaSanBay)) {
                foreach ($MaSanBay as $id) {
                    $this->pdo_execute($sql, $id);
                }
            } else {
                $this->pdo_execute($sql, $MaSanBay);
            }
        }

        //Get all
        function sanbay_select_all()
        {
            $sql = "SELECT * FROM sanbay";
            return $this->pdo_query($sql);
        }



        function num_row_sanbay(){
            $sql = "SELECT count(*) as num_row FROM sanbay";
            return $this->pdo_query($sql);
        }

        function sanbay_select_page($start,$num_rows_in_page){
            $sql = "SELECT * FROM sanbay LIMIT $start,$num_rows_in_page";
            return $this->pdo_query($sql);
        }

        function sanbay_select_by_id($MaSanBay)
        {
            $sql = "SELECT * FROM sanbay WHERE MaSanBay=?";
            return $this->pdo_query_one($sql, $MaSanBay);
        }
        
        function sanbay_select_by_parent_id($parent_id)
        {
            $sql = "SELECT * FROM sanbay WHERE parent_id=?";
            return $this->pdo_query($sql, $parent_id);
        }

    }
    
?>