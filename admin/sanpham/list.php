
<div class="rows">

    <form action="index.php?act=listsp" method="post">
        <input type="text" name="kyw">
        <select name="iddm">
            <option value="0" selected>Tất cả</option>
            <?php foreach ($listdanhmuc as $danhmuc) {
                extract($danhmuc);
                echo '<option value="' . $id . '">' . $namedm . '</option>';
            }
            ?>
        </select>
        <input type="submit" name="listok" value="Go">
        <a href="index.php?act=addsp">
            <i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i>
        </a>
    </form>


    <table class="table table-bordered">
        <tr>
            <th scope>#</th>
            <th scope>TÊN SẢN PHẨM</th>
            <th scope>HÌNH</th>
            <th scope>DANH MỤC</th>
            <th scope></th>
        </tr>
        <?php
        foreach ($listsanpham as $sanpham) {
            extract($sanpham);
            $suasp = "index.php?act=suasp&idsp=" . $idsp;
            $xoasp = "index.php?act=xoasp&idsp=" . $idsp;
            $copysp = "index.php?act=copysp&idsp=" . $idsp;
            $hinhpath = "../upload/" . $img;
            if (is_file($hinhpath)) {
                $hinh = "<img src='" . $hinhpath . "' >";
            } else {
                $hinh = "no photo";
            }
            echo '<tr>
                    <td>' . $idsp . '</td>
                    <td>' . $namesp . '</td>
                    <td>' . $hinh . '</td>
                    <td>' . $iddm . '</td>
                    <td>
                        <a href="' . $suasp . '"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i> 
                        <a href="' . $xoasp . '"><i class="fa fa-ban fa-2x" aria-hidden="true"></i>
                        <a href="' . $copysp . '"><i class="fa fa-files-o fa-2x" aria-hidden="true" ></i>
                    </td>
                </tr>';
            }
        ?>

    </table>
    

</div>
<style>
  
</style>