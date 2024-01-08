<?php
include("header_admin.php");
if(!isset($_SESSION["quantri"]))
{
echo "<script language=javascript>
alert('Bạn không có quyền trên trang này!'); window.location='../index.php';
</script>";
}
?>
<?php
include("ketnoi.php");
$ml=$_REQUEST["Maloai"];
$sql="delete from khachhang where
Maloai='".$ml."'";
$kq = $tenbanh -> query($sql) or die("Không thể xóa bánh");
echo ("<script laguage='javascript'>alert('Xóa thành công');window.location.assign('QT_xemchitietsp.php');</script>");
?>
<?php
include("footer_admin.php");
?>