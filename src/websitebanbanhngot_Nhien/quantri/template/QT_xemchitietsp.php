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
              <h3 class="page-title"> XEM CHI TIẾT SẢN PHẨM </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Quản lý</a></li>
                  <li class="breadcrumb-item"><a href="danhsach_sanpham.php">Danh sách sản phẩm</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Xem chi tiết</li>
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
                    <h4 class="card-title">CHI TIẾT BÁNH </h4>
                   <p class="card-description">ID: <?php echo $row["Masp"]; echo "<br>Tên bánh: "; echo $row["Tensp"];?>
                   </p>


                    <div class="table-responsive">
                      <table class="table table-bordered">
                       
                    <?php
    
                        echo"<tr>";
                        echo"<th>Hình ảnh</th>";
                        echo"<td><img style='width:500px; height:500px; border-radius:0px;' src='../../".$row["Hinhbanh"]."' ></td>";
                        echo"</tr>";
                        echo"<tr>";
                        echo"<th>Thành phần</th>";
                        echo"<td>".$row["Thanhphan"]."</td>";
                        echo"</tr>";
                        echo"<tr>";
                        echo"<th>Hạn sử dụng</th>";
                        echo"<td>".$row["Hansudung"]."</td>";
                        echo"</tr>";
                        echo"<tr>";
                        echo"<th>Ngày sản xuất</th>";
                        echo"<td>".$row["Ngaysanxuat"]."</td>";
                        echo"</tr>";
                        echo"<tr>";
                        echo"<th>Giá hiện tại</th>";
                        echo"<td>".$row["Giahientai"]."</td>";
                        echo"</tr>";
                        
                    ?>
                          
                       
                      </table>
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