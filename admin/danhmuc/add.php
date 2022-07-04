<div class="rows">
    <div class="rows frmtitle">
        <h3>THÊM MỚI LOẠI HÀNG HÓA</h3>
    </div>
    <div class="rows frmcontent">
        <form action="index.php?act=adddm" method="post">
            <div class="rows mb10">
                Mã loại <br>
                <input type="text" name="maloai" disabled>
            </div>
            <div class="rows mb10">
                Tên loại <br>
                <input type="text" name="tenloai">
            </div>
            <div class="rows mb10">
                <input type="submit" name="themmoi" value="THÊM MỚI">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>
            </div>
            <?php
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao 
            ?>
        </form>
    </div>
</div>
</div>