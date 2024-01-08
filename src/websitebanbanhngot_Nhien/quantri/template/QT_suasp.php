<?php
include("header_admin.php");
if(!isset($_SESSION["quantri"]))
{
echo "<script language=javascript>
alert('Bạn không có quyền trên trang này!'); window.location='../index.php';
</script>";
}
?>

<<!-- partial -->
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> SỬA SẢN PHẨM </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Quản lý</a></li>
                  <li class="breadcrumb-item"><a href="danhsach_sanpham.php">Danh sách sản phẩm</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Sửa sản phẩm</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              
                
              
             <?php
                $masp=$_REQUEST["msp"];
                include("ketnoi.php");
                $sql1="select * from sanpham where Masp=".$masp;
                $kq1=mysqli_query($kn,$sql1);
                $row=mysqli_fetch_array($kq1);
             ?>
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">THÔNG TIN BÁNH </h4>
                  


                    <div class="table-responsive">
                        <form action='xli_sua.php' name='frmSuaSP' method='post' enctype='multipart/form-data'>
                      <table class="table table-bordered">
                       
                    <?php

                       echo"<tr>";
                        echo"<th>Mã sản phẩm</th>";
                        echo"<td><input type='text' name='txtIDSP' value='".$row["Masp"]."' readonly='readonly'></td>";
                        echo"</tr>";
                        echo"<tr>";
                        echo"<th>Tên sản phẩm</th>";
                        echo"<td><input type='text' name='txtTenSP' value='".$row["Tensp"]."'></td>";
                        echo"</tr>";
                        echo"<tr>";
                        echo"<th>Hình ảnh</th>";
                        echo"<td><img style='width:500px; height:500px; border-radius:0px;' src='../../".$row["Hinhbanh"]."' >";
                        echo"<br>Đổi hình mới: <input type='hidden' name=''> <input type='file' name='fileHinhBanh'> ";
                        echo"</td>";
                        echo"</tr>";
                        echo"<tr>";
                        echo"<th>Thành phần</th>";
                        echo"<td><textarea name='txtTPhan' cols='80' rows='20'>".$row["Thanhphan"]."</textarea></td>";
                        echo"</tr>";
                        echo"<tr>";
                        echo"<th>Hạn sử dụng</th>";
                        echo"<td><input type='text' name='txtHSDung' value='".$row["Hansudung"]."' ></td>";
                        echo"</tr>";
                        echo"<tr>";
                        echo"<th>Ngày sản xuất</th>";
                        echo"<td><input type='date' name='txtNSXuat' value='".$row["Ngaysanxuat"]."' ></td>";
                        echo"</tr>";
                        echo"<tr>";
                        echo"<th>Giá hiện tại</th>";
                        echo"<td><input type='text' name='txtGia' value='".$row["Giahientai"]."' ></td>";
                        echo"</tr>";
                        echo"<tr>";
                        echo"<td colspan='2' align='center'><input class='edit btn btn-primary todo-list-add-btn' type='submit' value='Sửa' name='sbmSua'>";
                        
                        echo"</tr>";
                        
                    ?>
                          
                       
                      </table>
                        </form>
                    </div>
                  </div>
                </div>
              </div>




            </div>
          </div>
          <!-- content-wrapper ends -->

<?php
include("footer_admin.php");
?>