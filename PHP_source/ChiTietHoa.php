<?php
$kq="";
$Hoa = array();
include_once("HamXuLyTapTin.php");
$Hoa = DocRaBang("du_lieu/hoa.txt",$kq);
if(isset($_REQUEST["MaHoa"])){
	foreach($Hoa as $hoa){
	if($hoa[0]==$_REQUEST["MaHoa"]){
		echo"<table align='center' cellpadding='5' cellspacing='0' border='1' bordercolor='#CCCCCC' width='600px'><tr><td align='center'><img src='hinh_anh/".$hoa[4]."' width='150px'/></td><td align='center'><span style='font-size:20px; font-weight: bold'>".$hoa[2]."</span><br><br><i>Giá bán: </i>".number_format($hoa[3])." VNĐ<br><br><i>Thành phần chính:</i><br>".$hoa[5]."</td></tr></table>";
		break;
	}
	}
}
?>