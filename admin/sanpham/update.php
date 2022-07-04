<?php
    if(is_array($sanpham)){
        extract($sanpham);
    }
    $hinhpath="../upload/".$img;
    if(is_file($hinhpath)){
        $hinh="<img src='".$hinhpath."' >";
    }else{
        $hinh="no photo";
    }
?>
<div class="rows">
    
    <div class="rows frmcontent">
    <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="rows mb10">
            <select name="iddm">
                    <option value="0" selected>Tất cả</option>
                <?php foreach($listdanhmuc as $danhmuc){
                        extract($danhmuc);
                        if($iddm == $id) 
                        echo '<option value="'.$id.'" selected>'.$namedm.'</option>';
                        else
                        echo '<option value="'.$id.'">'.$namedm.'</option>';
                        }
                    ?>
                </select>
            </div>
            <div class="rows mb10">
                Tên sản phẩm <br>
                <input type="text" name="tensp" value="<?=$namesp?>">
            </div>
            <div class="rows mb10">
                Hình <br>
                <input type="file" name="hinh" >
                <?=$hinh?>
            </div>
            <div class="rows mb10">
                <input type="hidden" name="idsp" value="<?php if(isset($idsp) && ($idsp>0)) echo $idsp; ?>">
                <input type="submit" name="capnhat" value="CẬP NHẬT">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
            </div>
            <?php
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao 
            ?>
        </form>
    </div>
</div>
</div>