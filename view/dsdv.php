<main>
    <h3>Danh sách dịch vụ</h3>
    <?php
        foreach($loainew as $loai){
            extract($loai);
            echo ' <h1 class="h11">'.$name.'</h1>';
            $dichvu_result = loadall_dv_loai($id);
            echo '<div class="box-content">';
            foreach($dichvu_result as $dv){
                extract($dv);
                $hinh = $img_path.$anh;
                echo '
                    <div class="box-pr">
                        <div class="img">
                            <img src="'.$hinh.'" alt="">
                        </div>
                        <h3>'.$name.'</h3>
                        <div class="chitiet_sp">
                            <p class="price">Giá từ '.$gia.' VNĐ</p>
                            <a href="">Tìm hiểu thêm <i class="fa-solid fa-chevron-right"></i></a>
                        </div>
                    </div>
                ';
            }
           echo '</div>';
        }
        ?>
</main>