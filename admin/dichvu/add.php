<?php
    $tendvErr = $giadvErr = "";
    $tendv = $giadv = "";
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(empty($_POST['tendv'])){
            $tendvErr = "Vui lòng điển tên dịch vụ";
        }else{
            $tendv = test_input($_POST["tendv"]);
        }
        if(empty($_POST['giadv'])){
            $giadvErr = "Vui lòng điển giá dịch vụ";
        }else{
            $giadv = test_input($_POST["giadv"]);
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
            <h2>Thêm dịch vụ</h2>
            <form action="" method="post" enctype="multipart/form-data">
            Loại <br>
                    <select name="idloai">
                    
                        <?php
                    foreach($listloai as $loai){
                        extract($loai);
                        echo '
                        <option value="'.$id.'">'.$name.'</option>';
                    }
                        ?>
                    
                    </select>
                <label for="">Tên dịch vụ</label>
                <input type="text" name="tendv" id="">
                <span class="" style="color: red;"><?= $tendvErr ?> </span>
                <label for="">Giá</label>
                <input type="text" name="giadv" id="">
                <span class="" style="color: red;"><?= $giadvErr ?> </span>
                <label for="">Ảnh</label>
                <input type="file" name="anh" id="">
              
                <label for="">Mô tả</label>
                <textarea name="mota" cols="30" rows="10"></textarea>
            <a href=""><input type="submit" name="themmoi" class="btn" value="Thêm"></a>
            <a href=""><input type="button" name="" class="btn" value="Reset"></a>
            <a href="index.php?act=listdv"><input type="button" name="" class="btn" value="Danh sách"></a>
            <?php
                    if(isset($thongbao) && ($thongbao!="")){
                     echo $thongbao; }?>
            </form>
           <?php
           ?>
        </div>
        <?php
                   