<?php
if(isset($_SESSION["giohang"]) and isset($_SESSION["hoten"]))
{
	$giohang=$_SESSION["giohang"];
    $kq="<b>Giỏ hàng của bạn:</b>";
	$kq.="<table border='1' cellspacing='0' cellpadding='5'><tr><td>Mã hoa</td><td>Số lượng</td></tr>";
	foreach($giohang as $m=>$sl)
	$kq.="<tr style='background-color: #D3F4CE'><td align='center'>$m</td><td align='center'>$sl</td></tr>";
	$kq.="</table>";
	$kq.="</br><a href='trang_dat_hang.php'>Cập nhật giỏ hàng</a>";
	echo $kq;
}
?>
