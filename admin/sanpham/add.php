<div class="rows">
    <div class="rows frmtitle">
        <h3>THÊM MỚI SẢN PHẨM</h3>
    </div>
    <div class="rows frmcontent">
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
            <div class="rows mb10">
                Danh mục <br>
                <select name="iddm">
                    <?php foreach($listdanhmuc as $danhmuc){
                        extract($danhmuc);
                        echo '<option value="'.$id.'">'.$namedm.'</option>';
                    } 
                    ?>
    
                </select>
            </div>
            <div class="rows mb10">
                Tên sản phẩm <br>
                <input type="text" name="tensp">
            </div>
            
            <div class="rows mb10">
                Hình <br>
                <input type="file" name="hinh" >
            </div>
            
            <div class="rows mb10">
                <input type="submit" name="themmoi" value="THÊM MỚI">
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