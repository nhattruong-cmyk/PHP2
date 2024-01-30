<?php 

class Ve extends Connect{

        //Insert Ve
        function ve_insert($MaChuyenBay,$LoaiVe,$GiaVe)
        {
            $sql = "INSERT INTO ve(`MaChuyenBay`, `LoaiVe`, `GiaVe`) VALUES (?, ?, ?)";
            $this->pdo_execute($sql, $MaChuyenBay,$LoaiVe,$GiaVe);
            
        }
        

        //Update
        function ve_update($MaVe, $MaChuyenBay,$LoaiVe,$GiaVe)
        {
            $sql = "UPDATE `ve` SET `MaChuyenBay`=?,`LoaiVe`=?,`GiaVe`=? WHERE `MaVe`=?";
            $this->pdo_execute($sql,$MaChuyenBay,$LoaiVe,$GiaVe,$MaVe);
        }

        //Delete
        function ve_delete($MaVe)
        {
            $sql = "DELETE FROM `Ve` WHERE `$MaVe`=?";
            if (is_array($MaVe)) {
                foreach ($MaVe as $id) {
                    $this->pdo_execute($sql, $id);
                }
            } else {
                $this->pdo_execute($sql, $MaVe);
            }
        }

        //Get all
        function ve_select_all()
        {
            $sql = "SELECT * FROM ve";
            return $this->pdo_query($sql);
        }



        function num_row_Ve(){
            $sql = "SELECT count(*) as num_row FROM Ve";
            return $this->pdo_query($sql);
        }

        function Ve_select_page($start,$num_rows_in_page){
            $sql = "SELECT * FROM Ve LIMIT $start,$num_rows_in_page";
            return $this->pdo_query($sql);
        }

        function ve_select_by_id($MaVe)
        {
            $sql = "SELECT * FROM ve WHERE MaVe=?";
            return $this->pdo_query_one($sql, $MaVe);
        }
        
        function Ve_select_by_parent_id($parent_id)
        {
            $sql = "SELECT * FROM Ve WHERE parent_id=?";
            return $this->pdo_query($sql, $parent_id);
        }

    }
    
?>