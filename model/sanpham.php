<?php
// Câu lênh thêm sản phẩm
function insert_sanpham($namesp,$hinh,$iddm)
{
    $sql = "insert into sanpham(namesp,img,iddm) values('$namesp','$hinh','$iddm')";
    pdo_execute($sql);
}
// Câu lệnh xóa sản phẩm
function delete_sanpham($id)
{
    $sql = "delete from sanpham where idsp=" . $id;
    pdo_query($sql);
}
// Câu lênh lấy tất cả sản phẩm
function loadall_sanpham($kyw,$iddm)
{
    $sql = "SELECT * FROM sanpham where 1";
    if ($kyw!=""){
        $sql.=" AND namesp like '%".$kyw."%'";
    }
    if ($iddm>0){
        $sql.=" AND iddm = '".$iddm."'";
    }
    $sql.=" ORDER BY idsp ASC";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}


// Câu lệnh lấy 1 sản phẩm
function loadone_sanpham($id){
    $sql = "SELECT * FROM sanpham WHERE idsp=" . $id;
    $sanpham = pdo_query_one($sql);
    return $sanpham;
}
// Câu lệnh sửa sản phẩm
function update_sanpham($idsp,$tensp,$hinh,$iddm){
    if($hinh!="")
    $sql = "UPDATE sanpham SET iddm='" . $iddm . "', namesp='" . $tensp . "',idsp='" . $idsp . "',img='" . $hinh . "' WHERE idsp=" . $idsp;
    else
    $sql = "UPDATE sanpham SET iddm='" . $iddm . "', namesp='" . $tensp . "',idsp='" . $idsp . "' WHERE idsp=" . $idsp;
    pdo_execute($sql);
}

// Câu lệnh lấy tên danh muc
function loadten_dm($iddm){
    if ($iddm>0) {
        $sql = "SELECT * FROM danhmuc WHERE id=" . $iddm;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $name;
    }else {
        return "";
    }
    
}