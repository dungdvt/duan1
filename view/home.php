<main>
        <div class="slideshow">
            <div class="banner" >
                <img id="banner" src="./image/img2.png" alt="">
                <button class="pre" onclick="pre()">&#10094;</button>
                <button class="next" onclick="next()">&#10095;</button>
            </div>
        </div>
        <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Lấy dữ liệu từ form
                    $soDienThoai = $_POST["soDienThoai"];

                    // Tiến hành xử lý dữ liệu hoặc lưu vào cơ sở dữ liệu
                    // ...

                    // Chuyển hướng đến trang điền thông tin
                    header("Location: formbook.html");
                    exit;
                }
        ?>
        <div class="form-datlich" >

            <form action="" method="post">
            <h2 class="h1">Đặt lịch giữ chỗ chỉ 30 giây</h2>
            <p class="h1">Cắt xong trả tiền, hủy lịch không sao</p>
            <input type="text" name="" id="" placeholder="Nhập số điện thoại để đặt lịch">
            <input type="submit" name="" value="Đặt lịch ngay" id="">
            </form>
        </div>
        <div class="content">
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
     
            
            </div>
    </main>
