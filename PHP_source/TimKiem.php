<?php
$Hoa = array();
if(isset($_POST["ten"]))
{
include_once("HamXuLyTapTin.php");
$kq="";
$Hoa=DocRaBang("du_lieu/hoa.txt", $kq);
$bang=array();
$vt=0;
$ten=$_POST["ten"];
if($ten == '' or $ten == ' ')
    echo"<script>alert('Không có hoa cần tìm !')</script>";
else
{
foreach($Hoa as $hoa)
{
    if(strpos($hoa[2],$ten)!==false)
    {
	  $bang[$vt]=$hoa;
	  $vt++;
    }
}
if($vt>0){
echo"<table width='800px' align='center'>";
$dong=0;
foreach($bang as $hoa)
{
	if($dong%2==0)
		echo "<tr>";
	echo"<td width='150px'><img src='hinh_anh/".$hoa[4]." 'width='150px'/></td><td valign='top' width='250px'><span style='font-size:16px; font-weight:bold'>".$hoa[2]."</span><br><br><i>Giá bán: </i>".number_format($hoa[3])." VNĐ<br><br><i>Thành phần chính:</i><br>".$hoa[5]."<br><a href='index.php'>Quay về trang chính</a></td>";
	$dong++;
	if($dong%2==0)
	 echo"</tr>";
}
echo"</table>";
}
else
echo"<script>alert('Không có hoa cần tìm !')</script>";
}
}