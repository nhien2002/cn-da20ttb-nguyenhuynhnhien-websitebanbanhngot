<?php
include("ketnoi.php");
$ml = $_POST["txtMaloai"];
$tenbanh = $_POST["txtTennbanh"];

$sql = "UPDATE khachhang SET Tenbanh = '$ten' WHERE Maloai = '$ml'";

if ($tenbanh->query($sql) === TRUE) {
    echo("<script language='javascript'>alert('Sửa thành công'); window.location.assign('QT_xemchitietsp.php');</script>");
} else {
    echo "Lỗi: " . $tenbanh
    ->error;
}

$conn->close();
?>