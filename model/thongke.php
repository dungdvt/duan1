<?php
    function load_thongke_dichvu_loai() {
        $sql = "SELECT ldv.id, ldv.name, COUNT(*) 'soluong',  MIN(gia) 'gia_min',  MAX(gia) 'gia_max',  AVG(gia) 'gia_avg'   
                FROM loaidv ldv 
                JOIN dichvu dv ON ldv.id = dv.id_loai  
                GROUP BY ldv.id, ldv.name  
                ORDER BY soluong DESC ";
        return pdo_query($sql);  
    }

?>