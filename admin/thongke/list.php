<div class="boxright">
            <h2>Danh sách loại hình dịch vụ</h2>
            <table>
            <tr>
                
                <th>MÃ DỊCH VỤ</th>
                <th>TÊN DỊCH VỤ</th>
                <th>SỐ LƯỢNG</th>
                <th>GIÁ NHỎ NHẤT</th>
                <th>GIÁ LỚN NHẤT</th>
                <th>GIÁ TRUNG BÌNH</th>
                
            </tr>
            <?php
            
                foreach($listthongke as $thongke){
                    extract($thongke);
                   
                    

            ?>
            <tr>
                <td><?=$id?></td>
                <td><?=$name?></td>
                <td><?=$soluong?></td>
                <td><?=$gia_min?> VNĐ</td>
                <td><?=$gia_max?> VNĐ</td>
                <td><?=number_format($gia_avg, 2)?> VNĐ</td>   
            </tr>
            <?php            
                }
            ?>
           
            
           </table>
          
     
            <a href="index.php?act=bieudo"><input type="button" name="" class="btn" value="Bieu Do"></a>
        </div>
       </main>