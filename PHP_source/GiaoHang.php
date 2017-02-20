<?php
		  //Kiểm tra xem người dùng đã đăng nhập
		   if(isset($_SESSION["hoten"]))
		   {
			   // Ghi lại dữ liệu chi tiết đơn hàng 
               if($_POST["dia_chi"])
               {
			   $ngay=date("d/m/Y");
			   $diachi=$_POST["dia_chi"];
			   $hoten=$_SESSION["hoten"];
			   $dh="$ngay-$diachi-$hoten".PHP_EOL;
			   $giohang=$_SESSION["giohang"];
			   include_once("HamXuLyTapTin.php");
			   $kq="";
				$banghoa=DocRaBangHoa("du_lieu/hoa.txt",$kq);
				foreach($giohang as $m=>$sl)
					$dh.="/*".$m."|".$banghoa[$m][2]."|".$sl."|".($sl*$banghoa[$m][3]);
                require_once("GuiMail.php");
				GhiFile("du_lieu/chi_tiet_don_hang.txt",$dh);
				unset($_SESSION["giohang"]);
				echo "Bạn đã đặt hàng thành công !";
                }
                else
                {
                    echo"<script>alert('Bạn phải nhập địa chỉ giao hàng !')</script>";
                   	echo"<script>window.location='trang_dat_hang.php'</script>";
                }
			 }
			 else
             {
			 	echo"<script>alert('Bạn phải đăng nhập trước khi đặt hàng !')</script>"; 
    	        echo"<script>window.location='index.php';</script>";
             }  
?>