<div class="rows">
    <form action="index.php?act=listdm" method="post">
        
        <a href="index.php?act=adddm"><i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i></a>
    </form>
    <table class="table table-bordered">
        <tr>
            <th scope="col">#</th>
            <th scope="col">TÊN LOẠI</th>
            <th scope="col"></th>
        </tr>
        <?php
        foreach ($listdanhmuc as $danhmuc) {
            extract($danhmuc);
            $suadm = "index.php?act=suadm&id=" . $id;
            $xoadm = "index.php?act=xoadm&id=" . $id;
            echo '<tr>
                                <td>' . $id . '</td>
                                <td>' . $namedm . '</td>
                                <td>
                                <a href="' . $suadm . '"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i> 
                                <a href="' . $xoadm . '"><i class="fa fa-ban fa-2x" aria-hidden="true"></i>
                                
                                </td>
                            </tr>';
        }
        ?>

    </table>
</div>

</form>
<!-- </div>
</div> -->