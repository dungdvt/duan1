<?php
    $tenloaiErr = "";
    $tenloai=  "";
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(empty($_POST['tenloai'])){
            $tenloaiErr = "Vui lòng điển tên dịch loại";
        }else{
            $tenloai = "";
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
    }
?>
<div class="boxright">
            <h2>Thêm loại hình dịch vụ</h2>
            <form action="index.php?act=addloai" method="post">
                <label for="">Tên loại hình dịch vụ</label>
                <input type="text" name="tenloai" id="" >
                <span class="" style="color: red;"><?= $tenloaiErr ?> </span>
            <input type="submit" name="themmoi" class="btn" value="Thêm">
            <input type="submit" name="" class="btn" value="Reset">
            <a href="index.php?act=listloai"><input type="button" name="" class="btn" value="Danh sách"></a>
            <?php
                    if(isset($thongbao) && ($thongbao!="")){
                     echo $thongbao; }?>
            </form>
           
        </div>
       </main>