<?php
$BangHoa = array();
$Hoa = array();
$kq = "";
$MaLoai = 0;
include_once("HamXuLyTapTin.php");
DocFile("du_lieu/hoa.txt",$kq);
$BangHoa = explode("/*",$kq);
for($i = 1; $i < count($BangHoa); $i++)
	$Hoa[$i - 1] = explode("|",$BangHoa[$i]);
echo"<table width='900px' align='center'>";
$dong = 0;
if(isset($_REQUEST["MaLoai"]))
	$MaLoai = $_REQUEST["MaLoai"];
foreach($Hoa as $hoa)
{
	if($dong%3 == 0)
		echo "<tr>";
	if($MaLoai == 0)
    {
        if(isset($_SESSION["hoten"]))
            echo"<td width='300px'><a href='trang_chi_tiet_hoa.php?MaHoa=".$hoa[0]."'>"."<img src='hinh_anh/".$hoa[4]."' width='150px' /></a><br>".$hoa[2]."<a href='index.php?mh=".$hoa[0]."'><img src='hinh_anh/gio_hang.jpg'/></a><br><i>Giá bán:</i> ".number_format($hoa[3])."VNĐ</td>";
        else
            echo"<td width='300px'><a href='trang_chi_tiet_hoa.php?MaHoa=".$hoa[0]."'>"."<img src='hinh_anh/".$hoa[4]."' width='150px' /></a><br>".$hoa[2]."<img src='hinh_anh/gio_hang.jpg'/><br><i>Giá bán:</i> ".number_format($hoa[3])."VNĐ</td>";
    }
    else if($MaLoai == $hoa[1])
    {
        if(isset($_SESSION["hoten"]))
            echo"<td width='300px'><a href='trang_chi_tiet_hoa.php?MaHoa=".$hoa[0]."'>"."<img src='hinh_anh/".$hoa[4]."' width='150px' /></a><br>".$hoa[2]."<a href='index.php?mh=".$hoa[0]."'><img src='hinh_anh/gio_hang.jpg'/></a><br><i>Giá bán:</i> ".number_format($hoa[3])."VNĐ</td>";
        else
            echo"<td width='300px'><a href='trang_chi_tiet_hoa.php?MaHoa=".$hoa[0]."'>"."<img src='hinh_anh/".$hoa[4]."' width='150px' /></a><br>".$hoa[2]."<img src='hinh_anh/gio_hang.jpg'/><br><i>Giá bán:</i> ".number_format($hoa[3])."VNĐ</td>";
    }
    $dong++;
	if($dong%3==0)
	    echo"</tr>";
}
echo"</table>";
?>
