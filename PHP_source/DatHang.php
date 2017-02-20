<?php
include_once("HamXuLyTapTin.php");
$kq="";
$Hoa = DocRaBangHoa("du_lieu/hoa.txt",$kq);
$giohang=$_SESSION["giohang"];
if(isset($_REQUEST["xoa"]))
 {
	 unset($giohang[$_REQUEST["xoa"]]);
	 $_SESSION["giohang"]=$giohang;
}
if(isset($_POST["capnhat"]))
{
	foreach($giohang as $m=>$sl)
	$giohang[$m]=$_POST["sl".$m];
	$_SESSION["giohang"]=$giohang;
}
$kq='<form name="BangCapNhat" method="post" action="">';
$kq.="<table border='1' cellspacing='0' cellpadding='5' align='center'><tr align='center' style='background-color: #C7EAB0'><td>Mã hoa</td><td>Tên hoa</td><td>Số lượng</td><td>Đơn giá</td><td>Thành tiền</td><td><img src='hinh_anh/icon_xoa.jpg'/></td></tr>";
foreach($giohang as $m=>$sl)
{
	$hoa=$Hoa[$m];
	$kq.="<tr align='center' style='background-color: #E8F6D0'><td>$m</td><td>".$hoa[2]."</td><td><input name='sl".$hoa[0]."' type='text' value='$sl' size='3' maxlength='3'/></td><td>".$hoa[3]."</td><td>".$sl*$hoa[3]."</td><td><a href='trang_dat_hang.php?xoa=".$hoa[0]."'>Xóa</a></td></tr>";
}
$kq.="<tr style='background-color: #C7EAB0'><td colspan='6' align='right'><div align='center'><input type='submit' name='capnhat'  value='Cập nhật'/></div></td></tr>";
$kq.="</table></form>";
echo $kq;
?>