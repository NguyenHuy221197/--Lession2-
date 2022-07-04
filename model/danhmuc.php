<?php
// Câu lệnh thêm danh mục
function insert_danhmuc($tenloai)
{
    $sql = "insert into danhmuc(namedm) values('$tenloai')";
    pdo_execute($sql);
}
// Câu lênh xóa danh mục
function delete_danhmuc($id)
{
    $sql = "delete from danhmuc where id=" . $id;
    pdo_query($sql);
}
// Câu lệnh lấy tất cả danh mục
function loadall_danhmuc()
{
    $sql = "select * from danhmuc order by id asc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
// Câu lệnh lấy 1 danh mục
function loadone_danhmuc($id)
{
    $sql = "select * from danhmuc where id=" . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}
// Câu lệnh sửa danh mục
function update_danhmuc($id, $tenloai)
{
    $sql = "update danhmuc set namedm='" . $tenloai . "' where id=" . $id;
    pdo_execute($sql);
}
?>